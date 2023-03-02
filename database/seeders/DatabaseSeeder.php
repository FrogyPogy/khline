<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\posts;
use App\Models\Answer;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        posts::create([
            'judul' => 'Pertanyaan Pertama',
            'slug' => 'pertanyaan-pertama',
            'penanya' => 'jack',
            'email' => 'jack@gmail.com',
            'kategori' => 'warisan',
            'kode_provinsi' => 24,
            'pertanyaan' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            Distinctio odit unde dolor nisi autem minus nemo. Laudantium sapiente
             perspiciatis pariatur nobis facere blanditiis, vero quibusdam dignissimos
            asperiores id dolorum, dicta, nulla molestiae earum deleniti nihil ut neque
            reprehenderit minima enim unde esse suscipit placeat? Error accusamus iste
            distinctio voluptas doloremque.'
        ]);

        Answer::create([
            'posts_id' => 1,
            'penjawab' => 'eko',
            'jawaban' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            Distinctio odit unde dolor nisi autem minus nemo.' 
        ]);
    }
}
