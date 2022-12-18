<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class scoresFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'writtenTask-1' => fake()-> numberBetween($min=0,$max=99),
            'writtenTask-2' => fake()-> numberBetween($min=0,$max=99),
            'writtenTask-3' => fake()-> numberBetween($min=0,$max=99),
            'writtenTask-4' => fake()-> numberBetween($min=0,$max=99),
            'writtenTask-5' => fake()-> numberBetween($min=0,$max=99),
            'writtenTask-6' => fake()-> numberBetween($min=0,$max=99),
            'writtenTask-7' => fake()-> numberBetween($min=0,$max=99),
            'writtenTask-8' => fake()-> numberBetween($min=0,$max=99),
            'writtenTask-9' => fake()-> numberBetween($min=0,$max=99),
            'writtenTask-10' => fake()-> numberBetween($min=0,$max=99),
            'performanceTask-1' => fake()-> numberBetween($min=0,$max=99),
            'performanceTask-2' => fake()-> numberBetween($min=0,$max=99),
            'performanceTask-3' => fake()-> numberBetween($min=0,$max=99),
            'performanceTask-4' => fake()-> numberBetween($min=0,$max=99),
            'performanceTask-5' => fake()-> numberBetween($min=0,$max=99),
            'performanceTask-6' => fake()-> numberBetween($min=0,$max=99),
            'performanceTask-7' => fake()-> numberBetween($min=0,$max=99),
            'performanceTask-8' => fake()-> numberBetween($min=0,$max=99),
            'performanceTask-9' => fake()-> numberBetween($min=0,$max=99),
            'performanceTask-10' => fake()-> numberBetween($min=0,$max=99),
            'exams' => fake()-> numberBetween($min=0,$max=99),
            'initialGrade' => fake()-> numberBetween($min=0,$max=99),
            'QuarterlyGrade' => fake()-> numberBetween($min=0,$max=99),
        ];
    }
}
