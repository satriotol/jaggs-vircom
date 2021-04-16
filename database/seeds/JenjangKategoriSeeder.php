<?php

use App\Jenjang;
use App\Kategori;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class JenjangKategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jenjang::create([
            'name' => 'PELAJAR',
        ]);
        Jenjang::create([
            'name' => 'MAHASISWA',
        ]);
        Jenjang::create([
            'name' => 'UMUM',
        ]);
        Kategori::create([
            'name' => 'E-SPORT',
            'image' => '/asset/kategori/e-sport.jpg',
            'description'=> 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
        ]);
        Kategori::create([
            'name' => 'OLAHRAGA',
            'image' => '/asset/kategori/sport.jpg',
            'description'=> 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
        ]);
        Kategori::create([
            'name' => 'SENI',
            'image' => '/asset/kategori/art.jpg',
            'description'=> 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
        ]);
        Kategori::create([
            'name' => 'TILAWAH AL-QURAN',
            'image' => '/asset/kategori/mengaji.jpg',
            'description'=> 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
        ]);
        Kategori::create([
            'name' => 'FUTSAL',
            'parent_id' => 2
        ]);
    }
}
