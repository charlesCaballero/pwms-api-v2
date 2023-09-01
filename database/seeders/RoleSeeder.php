<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Roles;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Roles::insert([
            [
                'name' => 'Developer',
                'abbreviation' => 'dev',
            ], [
                'name' => 'User',
                'abbreviation' => 'user',
            ], [
                'name' => 'Supervisor',
                'abbreviation' => 'sup',
            ], [
                'name' => 'Staff',
                'abbreviation' => 'staff',
            ], [
                'name' => 'Guest',
                'abbreviation' => 'guest',
            ]
        ]);
    }
}
