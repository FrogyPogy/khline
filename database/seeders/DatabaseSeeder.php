<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\posts;
use App\Models\Answer;
use App\Models\User;
use App\Models\Kategori;
use App\Models\Provinsi;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    public function run()
    {
        User::create([
            'nama' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('superadmin123'),
            'jabatan' => 'Penyuluh Hukum Muda',
            'roles' => 'admin'
        ]);

        $allKategori = ["Anak", "Asuransi", "Bantuan Hukum", "Hak asuh", "Hak Cipta",
        "Hak Merek", "Hak Paten", "ITE", "Korupsi", "Hibah", "Ilegal Logging", "Jual Beli",
        "KDRT", "Kebakaran", "Kelalaian", "Lakalantas", "Leasing", "Narkoba", "Pernikahan",
        "Pembunuhan", "Pemerkosaan", "Pemerasan", "Penadahan", "Pelecehan", "Pencurian",
        "Pencurian dengan Pemberatan", "Penganiayaan", "Pengrusakan", "Penggelapan",
        "Penghasutan", "Penipuan", "Penyelundupan", "Perburuhan",
        "Perceraian Pengadilan Agama", "Perceraian Pengadilan Negeri", "Perdagangan Orang",
        "Perjudian", "Perlindungan Anak", "Persetubuhan", "Sajam/Bahan peledak",
        "Sengketa Tanah", "Wakaf",  "Wanpresentasi/Ingkar", "Warisan"];

        $allProvinsi = ["Aceh","Sumatera Utara","Sumatera Selatan","Sumatera Barat",
        "Bengkulu","Riau","Kepulauan Riau", "Jambi","Lampung","Bangka Belitung","Banten",
        "DKI Jakarta","Jawa Barat","Jawa Tengah","DI Yogyakarta","Jawa Timur",
        "Kalimantan Barat","Kalimantan Timur","Kalimantan Selatan","Kalimantan Tengah",
        "Kalimantan Utara","Bali","NTT","NTB","Gorontalo","Sulawesi Utara",
        "Sulawesi Barat","Sulawesi Tengah","Sulawesi Tenggara","Sulawesi Selatan",
        "Maluku Utara","Maluku","Papua","Papua Barat"];

        foreach($allKategori as $key){
            Kategori::create([
                'nama' => $key
            ]);
        }

        foreach($allProvinsi as $val){
            Provinsi::create([
                'nama' => $val
            ]);
        }

        posts::create([
            'judul' => 'Pertanyaan pertama',
            'slug' => 'pertanyaan-pertama',
            'penanya' => 'jack',
            'email' => 'jack@gmail.com',
            'kategori_id' => 2,
            'provinsi_id' => 18,
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
