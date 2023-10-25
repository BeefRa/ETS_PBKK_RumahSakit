<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class riwayat extends Model
{   
    protected $fillable = [
        'id',
        'NIK',
        'Nama_Pasien',
        'Kondisi',
        'Suhu',
        'Dokter',
    ];
    /* 
            'id' => fake()->id(),
            'NIK' => Int::random(6),
            'Nama_Pasien' => fake()->name(),
            'Kondisi' => 'Sakit/Sehat',
            'Suhu' => Int::random(2).'derajat',
            'Dokter' => Int::random(6),
    */
    use HasFactory;
}
