<?php

namespace Database\Factories;

use App\Models\Aplikasi;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tim>
 */
class TimFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $aplikasiIds = Aplikasi::pluck('id')->toArray();
        $userIds = User::where('role', '<>', 'Super Admin')->pluck('id')->toArray();
        return [
            'role' => Arr::random(["System Analyst", "Programmer", "Project Manager", "Quality Assurance"]),
            'id_user' => Arr::random($userIds),
            'id_aplikasi' => Arr::random($aplikasiIds),
            //
        ];
    }
}
