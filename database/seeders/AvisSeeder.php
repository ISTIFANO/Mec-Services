<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AvisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('avis')->insert([
            ['rating' => 5],
            ['rating' => 4],
            ['rating' => 3],
            ['rating' => 2],
            ['rating' => 1],
        ]);    }
}
