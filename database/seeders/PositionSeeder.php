<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    
            $positions = [
                ['zipcode' => 10000, 'ville' => 'Rabat'],
                ['zipcode' => 20000, 'ville' => 'Casablanca'],
                ['zipcode' => 40000, 'ville' => 'Marrakech'],
                ['zipcode' => 30000, 'ville' => 'Fès'],
                ['zipcode' => 50000, 'ville' => 'Meknès'],
                ['zipcode' => 60000, 'ville' => 'Tanger'],
                ['zipcode' => 70000, 'ville' => 'Agadir'],
                ['zipcode' => 80000, 'ville' => 'Oujda'],
                ['zipcode' => 90000, 'ville' => 'Tétouan'],
            ];
    
            DB::table('positions')->insert($positions);
        }    
}
