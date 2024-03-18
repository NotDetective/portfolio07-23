<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProgrammingLanguage>
 */
class ProgrammingLanguageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type' => rand(0, 1) ? 'framework' : 'language',
            'name' => $this->faker->unique()->word,
            'color' => $this->faker->hexColor,
        ];
    }
}
