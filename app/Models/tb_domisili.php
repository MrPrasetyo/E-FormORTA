<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
