<?php

namespace Database\Factories;

use App\Models\Exercise;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Exercise>
 */
class ExerciseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $exercise = Exercise::class;
    public function definition(): array
    {
        return [
            'exercise_name' => fake()->name(),
            'muscle_name' => fake()->name(),
        ];
    }
}
