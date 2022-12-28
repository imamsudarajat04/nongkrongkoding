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
            'thumbnail'        => 'landing/assets/images/laravel.png',
            'description'      => 'Lorem Ipsum',
            'linkYoutube'      => 'www.youtube.com/',
            'categoryvideo_id' => 1,
            'price'            => 120000,
        ]);

        \App\Models\Videos::create([
            'name'             => 'Javascript',
            'thumbnail'        => 'landing/assets/images/javascript256.png',
            'description'      => 'Lorem Ipsum',
            'linkYoutube'      => 'www.youtube.com/',
            'categoryvideo_id' => 2,
            'price'            => 155000,
        ]);

        \App\Models\Videos::create([
            'name'             => 'HTML Dasar',
            'thumbnail'        => 'landing/assets/images/html-5.png',
            'description'      => 'Lorem Ipsum',
            'linkYoutube'      => 'www.youtube.com/',
            'categoryvideo_id' => 3,
            'price'            => 685000,
        ]);

        \App\Models\Videos::create([
            'name'             => 'CSS Dasar',
            'thumbnail'        => 'landing/assets/images/css.png',
            'description'      => 'Lorem Ipsum',
            'linkYoutube'      => 'www.youtube.com/',
            'categoryvideo_id' => 4,
            'price'            => 90900,
        ]);

        \App\Models\Videos::create([
            'name'             => 'Bootstrap Dasar',
            'thumbnail'        => 'landing/assets/images/bootstrap.png',
            'description'      => 'Lorem Ipsum',
            'linkYoutube'      => 'www.youtube.com/',
            'categoryvideo_id' => 5,
            'price'            => 345000,
        ]);
    }
}
