<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $sex = ["F","M"];
        return [
            'name' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'registration' => $this->faker->buildingNumber(),
            'imageUrl' => $this->faker->imageUrl(),
            'isAvailable' => rand(0,1),
            'sex' => $sex[rand(0,1)],
            'birthDate' => $this->faker->dateTimeBetween("1960-01-01","2002-12-31"),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
