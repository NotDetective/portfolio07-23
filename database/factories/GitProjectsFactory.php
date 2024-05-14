<?php

namespace Database\Factories;

use App\Models\ProgrammingLanguage;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GitProjects>
 */
class GitProjectsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'programming_language_id' => ProgrammingLanguage::all()->random()->id,
            'name' => $this->faker->word,
            'description' => $this->faker->text,
            'archived' => $this->faker->boolean,
            'last_update' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'url' => $this->faker->url,
            'status' => $this->faker->randomElement(['approved', 'pending', 'rejected']),
        ];
    }
}
