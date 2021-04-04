<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cekkendaraan extends Model
{
    protected $table = 'cek_kendaraan';
    protected $primaryKey = 'platnomer';

    protected $fillable = [
        'platnomer',
        'namakendaraan',
        'platnomer',
        'no_mesin',
        'selinder',
        'merk',
        'type',
        'warna',
        'bahan_bakar',
        'kilometer',
        'tahun',
    ];
}
