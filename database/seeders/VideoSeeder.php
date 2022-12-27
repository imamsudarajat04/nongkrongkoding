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
            'image'            => 'landing/assets/images/laravel.png',
            'thumbnail'        => 'Ini laravel',
            'description'      => 'Lorem Ipsum',
            'linkYoutube'      => 'www.youtube.com/',
            'categoryvideo_id' => 1,
            'price'            => 120000,
        ]);

        \App\Models\Videos::create([
            'name'             => 'Javascript',
            'image'            => 'landing/assets/images/javascript256.png',
            'thumbnail'        => 'Ini JS',
            'description'      => 'Lorem Ipsum',
            'linkYoutube'      => 'www.youtube.com/',
            'categoryvideo_id' => 2,
            'price'            => 155000,
        ]);

        \App\Models\Videos::create([
            'name'             => 'HTML Dasar',
            'image'            => 'landing/assets/images/html-5.png',
            'thumbnail'        => 'Ini HTML',
            'description'      => 'Lorem Ipsum',
            'linkYoutube'      => 'www.youtube.com/',
            'categoryvideo_id' => 3,
            'price'            => 685000,
        ]);

        \App\Models\Videos::create([
            'name'             => 'CSS Dasar',
            'image'            => 'landing/assets/images/css.png',
            'thumbnail'        => 'Ini CSS',
            'description'      => 'Lorem Ipsum',
            'linkYoutube'      => 'www.youtube.com/',
            'categoryvideo_id' => 4,
            'price'            => 90900,
        ]);

        \App\Models\Videos::create([
            'name'             => 'Bootstrap Dasar',
            'image'            => 'landing/assets/images/bootstrap.png',
            'thumbnail'        => 'Ini Bootstrap',
            'description'      => 'Lorem Ipsum',
            'linkYoutube'      => 'www.youtube.com/',
            'categoryvideo_id' => 5,
            'price'            => 345000,
        ]);
    }
}
