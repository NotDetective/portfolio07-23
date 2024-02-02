<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Skils>
 */
class SkilsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $hasProgrammingLanguages = $this->faker->boolean;

        return [
            'programming_languages_id' => $hasProgrammingLanguages ? \App\Models\ProgrammingLanguage::factory() : null,
            'name' => $hasProgrammingLanguages ? null : $this->faker->name,
            'color' => $hasProgrammingLanguages ? null : $this->faker->hexColor,
            'description' => $hasProgrammingLanguages ? null : $this->faker->text(100),
        ];
    }
}
