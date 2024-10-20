<?php

namespace Database\Factories;

use App\Models\Worker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'worker_id' => Worker::factory()->create(),
            'city' => fake()->city(),
            'skill' => fake()->JobTitle(),
            "experience" => fake()->numberBetween(1, 10),
            'finished_study_at' => fake()->date,
        ];
    }
}
