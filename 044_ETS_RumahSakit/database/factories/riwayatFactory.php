<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\riwayat>
 */
class riwayatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => fake()->id(),
            'NIK' => Int::random(6),
            'Nama_Pasien' => fake()->name(),
            'Kondisi' => 'Sakit/Sehat',
            'Suhu' => Int::random(2).'derajat',
            'Dokter' => Int::random(6),
        ];
    }
}
