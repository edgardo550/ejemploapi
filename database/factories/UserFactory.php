<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'name' => fake()->name,
            'email' => fake()->unique()->safeEmail,
            'password' => bcrypt('password'), // Cambia 'password' según lo que necesites
            'total_balance' => fake()->numberBetween(1000, 10000),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ];
    }
}
