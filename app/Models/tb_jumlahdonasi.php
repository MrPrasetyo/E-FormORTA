<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_jumlahdonasi extends Model
{
    use HasFactory;
    protected $table = 'tb_jumlah_donasi';
    protected $fillable = [
        'nominal_donasi',
        'durasi_donasi',
    ];
}
