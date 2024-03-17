<?php

namespace Database\Seeders;

use App\Models\company;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     

        // Retrieve all users with the role 'employer'
        $employers = User::role('employer')->get();

        foreach ($employers as $employer) {
            // Create a company for each employer with random data
            company::create([
                'name' => fake()->company,
                'location' => fake()->address,
                'user_id' => $employer->id,
                'phone' => fake()->phoneNumber,
                'image' =>fake()->imageUrl(200, 200, 'business'),
            ]);
        }
        
    }
}
