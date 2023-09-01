<?php

namespace Database\Seeders;

use App\Models\OfficeUnits;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OfficeUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OfficeUnits::insert([
            'name' => 'Information Technology Management Section',
            'acronym' => 'ITMS',
            'code' => '001',
            'section_id' => 1,
        ]);
    }
}
