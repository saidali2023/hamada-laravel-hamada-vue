<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\Comment::create([
            'body'=>'some comment here from a simple user',
            'user_id'=>1,
            'post_id'=>1,
        ]);
        \App\Models\Comment::create([
            'body'=>'some comment here from a simple user',
            'user_id'=>1,
            'post_id'=>2,
        ]);
        \App\Models\Comment::create([
            'body'=>'some comment here from a simple user',
            'user_id'=>1,
            'post_id'=>3,
        ]);
    }
}
