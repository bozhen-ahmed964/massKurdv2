<?php

namespace Database\Factories;


use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Member>
 */
class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model =Member::class;

    public function definition(): array
    {
        return [
                'full_name' => fake()->name(),
                'age' => fake()->numberBetween(18, 50),
                'gender' => fake()->randomElement(['male', 'female']),
                'phone_number' => fake()->phoneNumber(),
                'exercise_type' => fake()->randomElement(['BodyBuilding', 'Cardio', 'Fitness']),
                'weight' => fake()->numberBetween(50, 100),
                'height' => fake()->numberBetween(150, 200),
                'start_date' => fake()->date(),
                'expire_date' => fake()->date(),
        ];
    }
}
