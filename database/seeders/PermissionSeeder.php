<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;
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
        // reset cahced roles and permission
        app()[PermissionRegistrar::class]->forgetCachedPermissions();
        
        // create permissions
        Permission::create(['name' => 'system_management_access', 'guard_name' => 'web']);
        Permission::create(['name' => 'menu_access', 'guard_name' => 'web']);
        Permission::create(['name' => 'pengguna_access', 'guard_name' => 'web']);
        Permission::create(['name' => 'pengguna_create', 'guard_name' => 'web']);
        Permission::create(['name' => 'pengguna_edit', 'guard_name' => 'web']);
        Permission::create(['name' => 'pengguna_delete', 'guard_name' => 'web']);
        Permission::create(['name' => 'hakakses_access', 'guard_name' => 'web']);
        Permission::create(['name' => 'hakakses_create', 'guard_name' => 'web']);
        Permission::create(['name' => 'hakakses_edit', 'guard_name' => 'web']);
        Permission::create(['name' => 'hakakses_delete', 'guard_name' => 'web']);
        Permission::create(['name' => 'jabatan_access', 'guard_name' => 'web']);
        Permission::create(['name' => 'jabatan_create', 'guard_name' => 'web']);
        Permission::create(['name' => 'jabatan_edit', 'guard_name' => 'web']);
        Permission::create(['name' => 'jabatan_delete', 'guard_name' => 'web']);

        //create roles and assign existing permissions
        $userRole = Role::create(['name' => 'client']);
        $userRole->givePermissionTo('system_management_access');
        $userRole->givePermissionTo('menu_access');
        $userRole->givePermissionTo('pengguna_access');
        $userRole->givePermissionTo('pengguna_create');
        $userRole->givePermissionTo('pengguna_edit');
        $userRole->givePermissionTo('pengguna_delete');

        // gets all permissions via Gate::before rule
        $superadminRole = Role::create(['name'=>'super-admin']);

        $user = User::factory()->create([
            'name'     => 'Testing User',
            'email'    => 'testing@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        $user->assignRole($userRole);

        $user = User::factory()->create([
            'name'     => 'Imam Sudarajat',
            'email'    => 'admin@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        $user->assignRole($superadminRole);

        // $adminRole = Role::create(['name' => 'admin']);
        // $adminRole->givePermissionTo('system_management_access');
        // $adminRole->givePermissionTo('pengguna_access');
        // $adminRole->givePermissionTo('pengguna_create');
        // $adminRole->givePermissionTo('pengguna_edit');
        // $adminRole->givePermissionTo('pengguna_delete');
        // $adminRole->givePermissionTo('hakakses_access');


        // \App\Models\Permission::create([
        //     'name'       => 'system_management_access',
        //     'guard_name' => 'web'
        // ]);

        // \App\Models\Permission::create([
        //     'name'       => 'user_access',
        //     'guard_name' => 'web'
        // ]);

        // \App\Models\Permission::create([
        //     'name'       => 'admin_access',
        //     'guard_name' => 'web'
        // ]);

        // \App\Models\Permission::create([
        //     'name'       => 'user_create',
        //     'guard_name' => 'web'
        // ]);

        // \App\Models\Permission::create([
        //     'name'       => 'admin_create',
        //     'guard_name' => 'web'
        // ]);

        // \App\Models\Permission::create([
        //     'name'       => 'user_edit',
        //     'guard_name' => 'web'
        // ]);

        // \App\Models\Permission::create([
        //     'name'       => 'admin_edit',
        //     'guard_name' => 'web'
        // ]);
    }
}
