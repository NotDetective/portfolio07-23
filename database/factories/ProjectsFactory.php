<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Projects>
 */
class ProjectsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->text,
            'short_description' => $this->faker->sentence,
            'show' => $this->faker->boolean,
            'status' => $this->faker->randomElement(['draft', 'published', 'archived', 'deleted', 'editing']),
        ];
    }
}
