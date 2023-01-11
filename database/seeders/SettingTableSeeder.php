<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Setting::create([
            'site_name'=>'Ayat amine',
            'contact_email'=>'amine@gmail.com',
            'address'=>'address example here'
        ]);
    }
}
