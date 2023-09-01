<?php

namespace Database\Seeders;

use App\Models\OfficeDivisions;
use Illuminate\Database\Seeder;

class OfficeDivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        OfficeDivisions::insert([
            'name' => 'Information Technology Management Section',
            'acronym' => 'ITMS',
            'code' => '001',
        ]);
    }
}
