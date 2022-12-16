<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Videos::create([
            'name'             => 'Laravel',
            'thumbnail'        => 'Ini laravel',
            'description'      => 'Lorem Ipsum',
            'linkYoutube'      => 'www.youtube.com/',
            'categoryvideo_id' => 1,
            'price'            => 120000,
        ]);

        \App\Models\Videos::create([
            'name'             => 'Javascript',
            'thumbnail'        => 'Ini JS',
            'description'      => 'Lorem Ipsum',
            'linkYoutube'      => 'www.youtube.com/',
            'categoryvideo_id' => 2,
            'price'            => 155000,
        ]);

        \App\Models\Videos::create([
            'name'             => 'HTML Dasar',
            'thumbnail'        => 'Ini HTML',
            'description'      => 'Lorem Ipsum',
            'linkYoutube'      => 'www.youtube.com/',
            'categoryvideo_id' => 3,
            'price'            => 685000,
        ]);

        \App\Models\Videos::create([
            'name'             => 'CSS Dasar',
            'thumbnail'        => 'Ini CSS',
            'description'      => 'Lorem Ipsum',
            'linkYoutube'      => 'www.youtube.com/',
            'categoryvideo_id' => 4,
            'price'            => 90900,
        ]);

        \App\Models\Videos::create([
            'name'             => 'Bootstrap Dasar',
            'thumbnail'        => 'Ini Bootstrap',
            'description'      => 'Lorem Ipsum',
            'linkYoutube'      => 'www.youtube.com/',
            'categoryvideo_id' => 5,
            'price'            => 345000,
        ]);
    }
}
