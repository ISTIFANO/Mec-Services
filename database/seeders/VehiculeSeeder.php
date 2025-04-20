<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehiculeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vehicules')->insert([
            [
                'name' => 'Smartphone',
                'model' => 'Galaxy S23',
                'annee_fabrication' => '2023-01-01', // Corrected date format
                'year' => 2023,
                'image' => 'smartphone.jpg', // Assuming image column is needed
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Laptop',
                'model' => 'MacBook Pro 14"',
                'annee_fabrication' => '2022-01-01', 
                'year' => 2022, 
                'image' => 'macbook.jpg', 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Headphones',
                'model' => 'Bose QuietComfort 45',
                'annee_fabrication' => '2022-01-01',
                'year' => 2022,
                'image' => 'headphones.jpg', 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tablet',
                'model' => 'iPad Air 5',
                'annee_fabrication' => '2023-01-01',
                'year' => 2023,
                'image' => 'tablet.jpg', 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Smartwatch',
                'model' => 'Apple Watch Series 8',
                'annee_fabrication' => '2023-01-01',
                'year' => 2023,
                'image' => 'smartwatch.jpg', 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Camera',
                'model' => 'Canon EOS R5',
                'annee_fabrication' => '2021-01-01',
                'year' => 2021,
                'image' => 'camera.jpg', 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Drone',
                'model' => 'DJI Mavic Air 2',
                'annee_fabrication' => '2020-01-01',
                'year' => 2020,
                'image' => 'drone.jpg', 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Smart Speaker',
                'model' => 'Amazon Echo Studio',
                'annee_fabrication' => '2021-01-01',
                'year' => 2021,
                'image' => 'smart-speaker.jpg', 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'VR Headset',
                'model' => 'Oculus Quest 2',
                'annee_fabrication' => '2020-01-01',
                'year' => 2020,
                'image' => 'vr-headset.jpg', 
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
