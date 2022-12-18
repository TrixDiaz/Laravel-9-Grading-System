<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      // \App\Models\User::factory(0)->create();
       \App\Models\Student::factory(20)->create();
        \App\Models\Classes::factory(10)->create();
       \App\Models\Professor::factory(10)->create();
       \App\Models\Subject::factory(10)->create();
    //    \App\Models\Scores::factory(30)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
    