<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       /*  DB::table('articles')->insert([
            'title' => 'Manfaat Teknologi Bagi Masyarakat',
            'content' => '<p align="justify"> Teknologi adalah sebuah produk yang dihasilkan oleh manusia dengan manfaat dan kegunaan untuk menjadikan kehidupan manusia lebih mudah, lebih maju, dan modern. Dengan adanya pembaharuan dari waktu ke waktu teknologi terus memperlihatkan kecanggihan dan kehebatannya yang dapat dimanfaatkan oleh manusia untuk mendukung aktivitas sehari-hari mereka serta membantu manusia untuk meningkatkan produktivitas kerja.
            Dengan adanya teknologi yang mutakhir manusia dapat memanfaatkan teknologi untuk berbagai macam hal yang sifatnya positif. Seperti halnya teknologi web, kecanggihan teknologi web dapat dimanfaatkan untuk mencari sumber informasi secara online hanya dalam hitungan detik. Kahadiran teknologi web tentunya dapat memberikan sekian banyak kemudahan bagi manusia dalam melakukan berbagai macam aktivitas.
            Setiap individu sebenarnya dituntut untuk bisa memanfaatkan kecanggihan teknologi untuk hal-hal yang sifatnya membangun. Adalah sebuah kesalahan dan kondisi yang sangat disayangkan ketika kecanggihan teknologi yang sudah luar biasa seperti sekarang ini tidak dimanfaatkan dengan sebaik mungkin untuk mendukung aktivitas-aktivitas yang berguna dan memberikan manfaat tersendiri bagi kehidupan orang tersebut.
            Kecanggihan teknologi harus dimanfaatkan dengan semaksimal mungkin, karena pada dasarnya teknologi itu sendiri diciptakan untuk mempermudah berbagai macam aktivitas atau pekerjaan manusia.',
            'image' => 'https://via.placeholder.com/640x480.png/B5E5CF?text= Manfaat Teknologi'
        ]); */
        \App\Models\Article::factory()->count(20)->create();
    }
}
