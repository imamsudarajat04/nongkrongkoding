<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Permission::create([
            'name'       => 'system_management_access',
            'guard_name' => 'web'
        ]);

        \App\Models\Permission::create([
            'name'       => 'user_access',
            'guard_name' => 'web'
        ]);

        \App\Models\Permission::create([
            'name'       => 'admin_access',
            'guard_name' => 'web'
        ]);

        \App\Models\Permission::create([
            'name'       => 'user_create',
            'guard_name' => 'web'
        ]);

        \App\Models\Permission::create([
            'name'       => 'admin_create',
            'guard_name' => 'web'
        ]);

        \App\Models\Permission::create([
            'name'       => 'user_edit',
            'guard_name' => 'web'
        ]);

        \App\Models\Permission::create([
            'name'       => 'admin_edit',
            'guard_name' => 'web'
        ]);
    }
}
