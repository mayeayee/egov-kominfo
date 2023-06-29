<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pegawai>
 */
class PegawaiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama_pegawai' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'jabatan' => Arr::random(["System Analyst", "Programmer", "Project Manager", "Quality Assurance"]),
            'status' => Arr::random(['aktif', 'tidak aktif']),

        ];
    }
}
