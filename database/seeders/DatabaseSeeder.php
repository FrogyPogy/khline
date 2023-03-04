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
            'judul' => 'Pertanyaan pertama',
            'slug' => 'pertanyaan-pertama',
            'penanya' => 'jack',
            'email' => 'jack@gmail.com',
            'kategori' => 'Warisan',
            'kode_provinsi' => 20,
            'pertanyaan' => 'Lorem ipsum dolor sit amet consectetur adipisicing
            elit. Labore sed non ea placeat. Iure nostrum alias fuga nihil labore
            culpa ex provident voluptas nam, in laborum consequatur minus itaque
            vero libero deserunt! At, sit. Error, officia repudiandae.
            Atque similique culpa commodi, suscipit error ipsa, placeat dolorum
            oluptatem vel magnam perspiciatis quidem quia eos quos recusandae delectus.
            Itaque doloremque iusto natus harum aperiam cumque, praesentium inventore
            placeat fugit quibusdam earum perferendis ea impedit. Sit quas incidunt
            tempore animi iusto tempora eum libero doloremque repellendus obcaecati
            ab accusamus iure hic eius ipsa earum ex praesentium aspernatur aliquid,
            unde est? Neque, incidunt earum?'
        ]);

        Answer::create([
            'posts_id' => 1,
            'penjawab' => 'eko',
            'jawaban' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            Distinctio odit unde dolor nisi autem minus nemo.' 
        ]);
    }
}
