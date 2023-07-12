<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class StudentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'first_name' => $this->faker->name(),
            // 'email' => $this->faker->unique()->safeEmail(),
            // 'email_verified_at' => now(),
            'studentIndex' => Str::random(10) . '@teacher',
            'first_name' => $this->faker->name(),
            'other_name' => $this->faker->name(),
            'last_name' => $this->faker->name(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'role' => "student",
            'class' => "C2b",
            'guidance' => $this->faker->name(),
            'guidance_number' => $this->faker->phoneNumber(),
            'location' => $this->faker->country(),
        ];
    }
}
