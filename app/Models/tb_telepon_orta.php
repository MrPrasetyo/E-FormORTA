<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_telepon_orta extends Model
{
    use HasFactory;
    protected $table = 'tb_telepon_orta';
    protected $fillable = [
        'telepon_rumah',
        'telepon_kantor',
    ];
}
