<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type' => rand(0, 1) ? 'github' : 'other',
            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'url' => $this->faker->url(),
            'tags' => $this->faker->words(3, true),
        ];
    }
}
