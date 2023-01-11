<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name'=>'ayat amine',
            'email'=>'amine@gmail.com',
            'password'=>bcrypt('123456'),
            'profile_img'=>'profile_img1.jpg'
        ]);
    }
}
