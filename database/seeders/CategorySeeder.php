<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            [
                'nom' => 'Informatique',
                'image' => 'informatique.jpg',
                'description' => 'Catégorie pour les offres liées à l\'informatique.',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Marketing',
                'image' => 'marketing.jpg',
                'description' => 'Tout ce qui touche au marketing digital et traditionnel.',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Comptabilité',
                'image' => 'comptabilite.jpg',
                'description' => 'Offres d\'emploi dans la finance et la comptabilité.',
                'active' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
