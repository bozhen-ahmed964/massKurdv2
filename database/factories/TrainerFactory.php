<?php

namespace Database\Factories;

use App\Models\Trainer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trainer>
 */
class TrainerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $trainer = Trainer::class;
    public function definition(): array
    {
        return [

            'full_name' => fake()->name(),
            'age' => fake()->numberBetween(18, 50),
            'gender' => fake()->randomElement(['male', 'female']),
            'phone_number' => fake()->phoneNumber(),
            'salery' => fake()->randomNumber(),

        ];
    }
}
