<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subject>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'subj_name' => fake()->name(),
            'subj_code' => fake()->numerify(),
            'subj_unit' => fake()->numerify($min=1,$max=10),
        ];
    }
}
