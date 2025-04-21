<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\TagSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\CategorySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            VehiculeSeeder::class,CompetencesSeeder::class,CategorySeeder::class,TagSeeder::class
        ]);
    }
}
