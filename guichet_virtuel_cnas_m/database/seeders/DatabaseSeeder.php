<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            // StatesSeeder::class,
            // CommunesSeeder::class,
            StructureTypesTableSeeder::class,
            StructuresTableSeeder::class,
            // RolesTableSeeder::class,
            // PermissionsTableSeeder::class,

        ]);
    }
}
