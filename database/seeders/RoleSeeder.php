<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('roles')->insert([
            'name' => 'Superadmin',
            'guard_name' => 'web',
        ]);

        \DB::table('roles')->insert([
            'name' => 'User',
            'guard_name' => 'web',
        ]);
    }
}
