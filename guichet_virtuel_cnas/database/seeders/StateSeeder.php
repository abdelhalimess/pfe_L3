<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('states')->insert(['name' => "Ain defla", 'code' => "44",]);
        DB::table('states')->insert(['name' => "ORAN", 'code' => "31",]);
        DB::table('states')->insert(['name' => "ALGER", 'code' => "16",]);
        DB::table('states')->insert(['name' => "CHLEF", 'code' => "02",]);
        DB::table('states')->insert(['name' => "SIDI BEL ABBES", 'code' => "22",]);
    }
}
