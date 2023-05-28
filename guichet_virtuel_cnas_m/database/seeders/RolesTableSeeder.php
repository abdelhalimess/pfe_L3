<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \Spatie\Permission\Models\Role;


class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            'superadmin',
            'manager',
            'admin',
            'user',
            'superviseur',
        ];
        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }
    }
}
