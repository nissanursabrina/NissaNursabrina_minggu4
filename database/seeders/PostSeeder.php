<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* DB::table('posts')->insert([
            'title' => 'Belajar Model Dengan Laravel',
            'author' => 'Nissa',
            'content' => 'Belajar Laravel itu menyenangkan',
            'image' => 'https://via.placeholder.com/640x480.png/00ff77?text=Belajar Model',
            'draft' => 0
        ]); */
        \App\Models\Post::factory()->count(10)->create();
    }
}
