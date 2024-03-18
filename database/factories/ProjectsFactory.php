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
        $type = $this->faker->randomElement(['repository', 'project']);

        return [
            'programming_languages_id' => $type === 'repository' ? $this->faker->numberBetween(1, 10) : null,
            'type' => $type,
            'name' => $this->faker->word,
            'link' => $type === 'repository' ? $this->faker->url : null,
            'description' => $this->faker->text,
            'archived' => $this->faker->boolean,
            'last_update' => $type === 'repository' ? $this->faker->dateTimeBetween('-1 year', 'now') : null,
        ];
    }
}
