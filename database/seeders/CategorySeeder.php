<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'nom' => 'Technology',
                'image' => 'technology.jpg',
                'description' => 'All things tech-related.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Health',
                'image' => 'health.jpg',
                'description' => 'Health tips and wellness.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Travel',
                'image' => 'travel.jpg',
                'description' => 'Explore new places and adventures.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
