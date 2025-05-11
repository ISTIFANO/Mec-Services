<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Enums\Roles;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        foreach (Roles::cases() as $role) {
            Role::firstOrCreate(['name' => $role->value]);
        }
    }
}


