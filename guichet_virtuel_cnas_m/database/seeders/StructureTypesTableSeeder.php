<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StructureTypesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('structure_types')->insert([
            ['id' => 1, 'name' => 'AGENCY', 'created_at' => now(), 'updated_at' => now(),],
            ['id' => 2, 'name' => 'HEAD OFFICE', 'created_at' => now(), 'updated_at' => now(),],
            ['id' => 3,  'name' => 'INSTITUTION', 'created_at' => now(), 'updated_at' => now(),],
            ['id' => 4,  'name' => 'OTHER', 'created_at' => now(), 'updated_at' => now(),],
        ]);
    }
}
