<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryVideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\CategoryVideo::create([
            'name' => 'Laravel'
        ]);

        \App\Models\CategoryVideo::create([
            'name' => 'Javascript'
        ]);

        \App\Models\CategoryVideo::create([
            'name' => 'HTML'
        ]);

        \App\Models\CategoryVideo::create([
            'name' => 'CSS'
        ]);

        \App\Models\CategoryVideo::create([
            'name' => 'Bootstrap'
        ]);
    }
}
