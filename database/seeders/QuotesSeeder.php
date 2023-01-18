<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Quotes::create([
            'name' => '"Satu-satunya cara untuk melakukan pekerjaan hebat yaitu dengan mencintai apa yang sedang kamu lakukan." <br> -Steve Jobs'
        ]);

        \App\Models\Quotes::create([
            'name' => '"Jangan biarkan perasaan putus asa menyerang dirimu. Yakinlah, pada akhirnya, kamu pasti akan berhasil." <br> -Abraham Lincoln'
        ]);

        \App\Models\Quotes::create([
            'name' => '"Masa depan itu tergantung pada apa yang sedang kamu lakukan hari ini." - Mahatma Gandhi'
        ]);

        \App\Models\Quotes::create([
            'name' => '"Berusahalah untuk tidak menjadi sukses, tapi berusahalah untuk menjadi bernilai." - Albert Einstein'
        ]);
    }
}
