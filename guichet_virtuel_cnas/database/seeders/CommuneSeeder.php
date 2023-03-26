<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommuneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('communes')->insert(['name' => "Ain defla", 'code' => "44", "state_id" => "1"]);
        DB::table('communes')->insert(['name' => "ORAN", 'code' => "31", "state_id" => "2"]);
        DB::table('communes')->insert(['name' => "ALGER", 'code' => "16", "state_id" => "3"]);
        DB::table('communes')->insert(['name' => "CHLEF", 'code' => "02", "state_id" => "4"]);
        DB::table('communes')->insert(['name' => "SIDI BEL ABBES", 'code' => "22", "state_id" => "5"]);
    }
}
