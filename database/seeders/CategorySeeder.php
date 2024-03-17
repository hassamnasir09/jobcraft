<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $categories = [
            'Web Development',
            'Graphic Designer',
            'Multimedia',
            'Advertising',
            'Education & Training',
            'English',
            'Social Media',
            'Writing',
            'PHP Programming',
            'Project Management',
            'Finance Management',
            'Office & Admin',
            'Web Designer',
            'Customer Service',
            'Marketing & Sales',
            'Software Development',
        ];

        foreach ($categories as $name) {
            category::create([
                'name' => $name,
            ]);
        }
    }
}
