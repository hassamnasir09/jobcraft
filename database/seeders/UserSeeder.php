<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::create(['name' => 'admin']);
        $employerRole = Role::create(['name' => 'employer']);
        $userRole = Role::create(['name' => 'user']);

        // Create users with roles
        $adminUser = User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);
        $adminUser->assignRole($adminRole);

        $employerUser = User::create([
            'name' => 'Employer User',
            'email' => 'employer@example.com',
            'password' => bcrypt('password'),
        ]);
        $employerUser->assignRole($employerRole);

        $regularUser = User::create([
            'name' => 'Regular User',
            'email' => 'user@example.com',
            'password' => bcrypt('password'),
        ]);
        $regularUser->assignRole($userRole);
    }
}
