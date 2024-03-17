<?php

namespace Database\Seeders;

use App\Models\application;
use App\Models\job;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Get all jobs and users
         $jobs = job::all();
         $users = User::role('user')->get();

 
         foreach ($jobs as $job) {
             // Apply to the job with random users
             $randomUsers = $users->random(rand(1, $users->count())); // Apply between 1 to 5 random users per job
 
             foreach ($randomUsers as $user) {
                 application::create([
                     'job_id' => $job->id,
                     'user_id' => $user->id,
                     'resume_file' => 'path/to/resume/file', // Replace with actual file path or use Faker to generate paths
                 ]);
             }
         }
    }
}
