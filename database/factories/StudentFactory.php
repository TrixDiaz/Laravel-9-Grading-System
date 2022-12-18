<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            
                'student_no' => fake()->numerify('22-####'),
                'first_name' => fake()->firstname(),
                'last_name' => fake()->lastname(),
                'age' => fake()-> numberBetween($min=18,$max=30),
                'gender' => fake()->randomElement(['Male', 'Female']),
                'email' => fake()->safeEmail(),
                'contact_no' => fake()->numerify('09-#####-####')
            
        ];
      
    }   
}
