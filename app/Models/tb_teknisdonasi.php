<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_teknisdonasi extends Model
{
    use HasFactory;
    protected $table = 'tb_teknisdonasi';
    protected $fillable = [
        'teknis',
        'tanggal_pembayaran',
    ];
}
