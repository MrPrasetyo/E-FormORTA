<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class form_orta extends Model
{
    use HasFactory;
    protected $table = 'form_orta';
    protected $fillable = [
        'nama_orta',
        'tgllahir_orta',
        'alamat_orta',
        'domisili_orta',
        'telepon_orta',
        'nomor_hp_orta',
        'email_orta',
        'alias',
        'jumlah_donasi_orta',
        'cara_pembayaran_orta',
        'teknis_donasi_orta',
        'foto_orta',
    ];
}

class tb_alias extends Model
{
    use HasFactory;
    protected $table = 'tb_alias';
    protected $fillable = [
        'alias',
    ];
}

class tb_domisili extends Model
{
    use HasFactory;
    protected $table = 'tb_domisili';
    protected $fillable = [
        'provinsi_id',
        'provinsi_name',
        'kota_id',
        'kota_name',
        'kecamatan_id',
        'kecamatan_name',
        'kelurahan_id',
        'kelurahan_name',
    ];
}

class tb_jumlah_donasi extends Model
{
    use HasFactory;
    protected $table = 'tb_jumlah_donasi';
    protected $fillable = [
        'nominal_donasi',
        'durasi_donasi',
    ];
}

class tb_nomor_orta extends Model
{
    use HasFactory;
    protected $table = 'tb_nomor_orta';
    protected $fillable = [
        'nomor_hp',
        'nomor_wa',
    ];
}

class tb_pembayaran extends Model
{
    use HasFactory;
    protected $table = 'tb_pembayaran';
    protected $fillable = [
        'pembayaran',
    ];
}

class tb_teknisdonasi extends Model
{
    use HasFactory;
    protected $table = 'tb_teknisdonasi';
    protected $fillable = [
        'teknis',
        'tanggal_pembayaran',
    ];
}

class tb_telepon_orta extends Model
{
    use HasFactory;
    protected $table = 'tb_telepon_orta';
    protected $fillable = [
        'telepon_rumah',
        'telepon_kantor',
    ];
}