<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\TagSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\AvisSeeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\PositionSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AvisSeeder::class,VehiculeSeeder::class,CompetencesSeeder::class,CategorySeeder::class,TagSeeder::class,RoleSeeder::class,CategorySeeder::class,PositionSeeder::class,UserSeeder::class,
        ]);
    }
}
