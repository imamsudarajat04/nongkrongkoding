<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name'     => 'Fikri',
            'email'    => 'fazliialfikri@gmail.com',
            'password' => Hash::make('Akusiapa00!'),
            'telphone' => '082386072352'
        ]);

        \App\Models\User::create([
            'name'     => 'Yudha',
            'email'    => 'yuhaaaa121@gmail.com',
            'password' => Hash::make('Qwerty12!'),
            'telphone' => '082284651391'
        ]);

        \App\Models\User::create([
            'name'     => 'Imam',
            'email'    => 'admin@gmail.com',
            'password' => Hash::make('Escendol123!'),
            'telphone' => '083183462191'
        ]);
    }
}
