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