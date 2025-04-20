<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tags')->insert([
            [
                'name' => 'Technology',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Health',

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Travel',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }  
  }

