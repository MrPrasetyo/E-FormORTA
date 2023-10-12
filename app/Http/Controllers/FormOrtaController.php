<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\form_orta;

class FormOrtaController extends Controller
{
    public function store(Request $request)
{
    $data = $request->validate([
        'fnama-orta' => 'required|string',
        'fdate-orta' => 'required|date',
        'falamat-orta' => 'required|string',
    ]);

    // Simpan data ke dalam tabel database
    form_orta::create([
        'nama_orta' => $data['fnama-orta'],
        'tgllahir_orta' => $data['fdate-orta'],
        'alamat_orta' => $data['falamat-orta'],
        'domisili_orta' => 3,
        'telepon_orta' => 3,
        'nomor_hp_orta' => 3,
        'email_orta' => 'test',
        'alias' => 3,
        'jumlah_donasi_orta' => 3,
        'cara_pembayaran_orta' => 3,
        'teknis_donasi_orta' => 3,
        'foto_orta' => 'test',
    ]);

    // Redirect atau berikan respons sukses
    return redirect()->route('nama-rute-berikutnya');
}

}
