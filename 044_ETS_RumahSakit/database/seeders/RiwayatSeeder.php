<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RiwayatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\riwayat::factory(10)->create();

        \App\Models\riwayat::factory()->create([
            'NIK' => '123456',
            'Nama_Pasien' => 'Testing',
            'Kondisi' => 'Sakit', 
            'Suhu' => Int::random(2).'derajat',
            'Dokter' => '654321',
        ]);
    }
}
