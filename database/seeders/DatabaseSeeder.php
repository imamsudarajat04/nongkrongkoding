<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\CategoryVideo;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        $this->call([
                CategoryVideoSeeder::class,
                VideoSeeder::class,
                UserSeeder::class,
                RoleSeeder::class,
                Permission::class,
        ]);

        // $this->call(CategoryVideoSeeder::class);
        // $this->call(VideoSeeder::class);
        // $this->call(Permission::class);
    }
}
