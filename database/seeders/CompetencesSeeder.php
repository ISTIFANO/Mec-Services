<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CompetencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('competences')->insert([
            [
                'name' => 'Technology',
                'icon' => 'technology.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Health',
                'icon' => 'technology.jpg',

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Travel',
                'icon' => 'technology.jpg',

                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
