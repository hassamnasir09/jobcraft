<?php

namespace Database\Seeders;

use App\Models\job;
use App\Models\User;
use App\Models\company;
use App\Models\category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        // Retrieve all categories, companies, and users (employers)
        $categories = category::all();
        $companies = company::all();
        $employers = User::role('employer')->get();

        foreach ($categories as $category) {
            // Create a random number of jobs for each category
            $jobsCount = rand(3, 8); // Adjust the range based on your requirements

            for ($i = 0; $i < $jobsCount; $i++) {
                job::create([
                    'company_id' => $companies->random()->id,
                    'category_id' => $category->id,
                    'employer_id' => $employers->random()->id,
                    'job_type' => fake()->randomElement(['full-time', 'half-time', 'part-time']),
                    'job_description' => fake()->paragraph,
                    'no_of_seats' => rand(1, 10),
                    'salary' => fake()->randomNumber(5),
                    'prefered_gender' => fake()->randomElement(['Male', 'Female', 'Any']),
                    'experice_required' => fake()->word,
                    'title' => fake()->jobTitle, // Use Faker to generate a random job title

                ]);
            }
        }
    }
}
