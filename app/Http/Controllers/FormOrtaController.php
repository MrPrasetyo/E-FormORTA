<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\form_orta;
use App\Models\tb_alias;
use App\Models\tb_domisili;
use App\Models\tb_jumlahdonasi;
use App\Models\tb_nomor;
use App\Models\tb_pembayaran;
use App\Models\tb_teknisdonasi;
use App\Models\tb_telepon_orta;
use App\Http\Requests\formortarequest;


class FormOrtaController extends Controller
{
    public function store(Request $request)
    { 
        $provinsiId = $request->input('provinsiSelect');
        $provinsi = Http::get('https://kanglerian.github.io/api-wilayah-indonesia/api/provinces.json');
        $dataProvinsi = $provinsi->json();
        $filteredProvinsi = collect($dataProvinsi)->filter(function($item1) use ($provinsiId) {
            return $item1['id'] === $provinsiId; // Specify the IDs you want to filter by
        })->values()->all();

        $kotaId = $request->input('kotaSelect');
        $kota = Http::get("https://kanglerian.github.io/api-wilayah-indonesia/api/regencies/{$provinsiId}.json");
        $dataKota = $kota->json();
        $filteredKota = collect($dataKota)->filter(function($item2) use ($kotaId) {
            return $item2['id'] === $kotaId; // Specify the IDs you want to filter by
        })->values()->all();

        $kecamatanId = $request->input('kecamatanSelect');
        $kecamatan = Http::get("https://kanglerian.github.io/api-wilayah-indonesia/api/districts/{$kotaId}.json");
        $dataKecamatan = $kecamatan->json();
        $filteredKecamatan = collect($dataKecamatan)->filter(function($item3) use ($kecamatanId) {
            return $item3['id'] === $kecamatanId; // Specify the IDs you want to filter by
        })->values()->all();

        $kelurahanId = $request->input('kelurahanSelect');
        $kelurahan = Http::get("https://kanglerian.github.io/api-wilayah-indonesia/api/villages/{$kecamatanId}.json");
        $dataKelurahan = $kelurahan->json();
        $filteredKelurahan = collect($dataKelurahan)->filter(function($item3) use ($kelurahanId) {
            return $item3['id'] === $kelurahanId; // Specify the IDs you want to filter by
        })->values()->all();

        $tbAlias = tb_alias::create([
            'alias' => $request->input('radioalias'),
        ]);

        $tbDomisili = tb_domisili::create([
            'provinsi_id' => $filteredProvinsi[0]['id'],
            'provinsi_name' => $filteredProvinsi[0]['name'],
            'kota_id'=> $filteredKota[0]['id'],
            'kota_name'=> $filteredKota[0]['name'],
            'kecamatan_id'=> $filteredKecamatan[0]['id'],
            'kecamatan_name'=> $filteredKecamatan[0]['name'],
            'kelurahan_id'=> $filteredKelurahan[0]['id'],
            'kelurahan_name'=> $filteredKelurahan[0]['name'],
        ]);

        $tbJumlahdonasi = tb_jumlahdonasi::create([
            'nominal_donasi' => $request->input('checkDonasi'),
            'durasi_donasi' => $request->input('selamabulan'),
        ]);

        $tbNomor = tb_nomor::create([
            'nomor_hp' => $request->input('nomorhp-orta'),
            'nomor_wa' => $request->input('nomorwa-orta'),
        ]);

        $tbPembayaran = tb_pembayaran::create([
            'pembayaran' => $request->input('RadioCaraPembayaran'),
        ]);

        $tbTeknisdonasi = tb_teknisdonasi::create([
            'teknis' => $request->input('teknis-donasi'),
            'tanggal_pembayaran' => $request->input('setiapTanggal'),
        ]);

        $tbTelepon = tb_telepon_orta::create([
            'telepon_rumah' => $request->input('nomorrumah-orta'),
            'telepon_kantor' => $request->input('nomorkantor-orta'),
        ]);



                // Simpan data ke dalam tabel database
                form_orta::create([
                    'nama_orta' => $request->input('nama-orta'),
                    'tgllahir_orta' => $request->input('date-orta'),
                    'alamat_orta' => $request->input('alamat-orta'),
                    'domisili_orta' => $tbDomisili->id, // Gantilah 'id' dengan nama field yang sesuai
                    'telepon_orta' => $tbTelepon->id, // Gantilah 'id' dengan nama field yang sesuai
                    'nomor_hp_orta' => $tbNomor->id, // Gantilah 'id' dengan nama field yang sesuai
                    'email_orta' => 'test', // Misalnya 'test', sesuaikan dengan kebutuhan Anda
                    'alias' => $tbAlias->id, // Gantilah 'id' dengan nama field yang sesuai
                    'jumlah_donasi_orta' => $tbJumlahdonasi->id, // Gantilah 'id' dengan nama field yang sesuai
                    'cara_pembayaran_orta' => $tbPembayaran->id, // Gantilah 'id' dengan nama field yang sesuai
                    'teknis_donasi_orta' => $tbTeknisdonasi->id, // Gantilah 'id' dengan nama field yang sesuai
                    'foto_orta' => $request->input('fotobukti'),
                    'status' => 'Pending',
                ]);

        // Redirect atau berikan respons sukses
        return redirect()->route('formulir')->with('success', 'Data berhasil disimpan ke dalam database.');
    } 
    
}
