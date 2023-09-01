<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([[
            'hris' => '30734319',
            'first_name' => 'Charles',
            'middle_name' => 'Gutierrez',
            'last_name' => 'Caballero',
            'office_id' => 1,
            'role_id' => 1,
            'email' => 'charles.g.caballero@gmail.com',
            'password' => bcrypt('456Knight'),
            'status' => true,
            'division_id' => 1,
            'unit_id' => 1,
            'role_id' => 1,
        ], [
            'hris' => '20423804',
            'first_name' => 'Cherry Mae',
            'middle_name' => 'Galivo',
            'last_name' => 'Seriña',
            'office_id' => 1,
            'role_id' => 1,
            'email' => 'cherrymserina@gmail.com',
            'password' => bcrypt('admin123'),
            'status' => true,
            'division_id' => 1,
            'unit_id' => 1,
            'role_id' => 1,
        ]]);
    }
}
