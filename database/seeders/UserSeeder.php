<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        DB::table('users')->insert([
            'firstname' => $faker->firstName,
            'lastname' => $faker->lastName,
            'email' => $faker->unique()->safeEmail,
            'password' => Hash::make('password'),
            'phone' => $faker->unique()->phoneNumber,
            'rating' => $faker->randomFloat(2, 1, 5), 
            'est_service' => $faker->boolean, 
            'image' => $faker->imageUrl(), 
            'become_mechanicien' => $faker->boolean,
            'role_id' => 1 
        ]);
    }
}
