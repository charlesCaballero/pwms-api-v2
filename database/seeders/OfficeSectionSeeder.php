<?php

namespace Database\Seeders;

use App\Models\OfficeSections;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OfficeSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OfficeSections::insert([
            'name' => 'Information Technology Management Section',
            'acronym' => 'ITMS',
            'code' => '001',
            'division_id' => 1,
        ]);
    }
}
