<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StructureTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('structure_types')->insert([
        	['name' => 'AGENCE',], 
        	['name'=>  'DIRECTION GENERALE',],
            ['name'=>  'ETABLISSEMENT',],
            ['name'=>  'AUTRE',],
        ]);

    }
}
