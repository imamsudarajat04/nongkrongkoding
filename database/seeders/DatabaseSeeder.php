<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\CategoryVideo;
use App\Models\Quotes;
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
                FooterSettingSeeder::class,
                CategoryVideoSeeder::class,
                QuotesSeeder::class,
                VideoSeeder::class,
                PermissionSeeder::class,
        ]);
    }
}
