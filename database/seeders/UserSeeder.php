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
            'password' => Hash::make('password'), // You can set a default password or generate a random one
            'phone' => $faker->unique()->phoneNumber,
            'rating' => $faker->randomFloat(2, 1, 5), // Random rating between 1 and 5
            'est_service' => $faker->boolean, // Random boolean value
            'image' => $faker->imageUrl(), // Random image URL
            'become_mechanicien' => $faker->boolean,
            'role_id' => 1 // Random boolean value
        ]);
    }
}
