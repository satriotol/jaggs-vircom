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
            'name' => 'SENI'
        ]);
        Kategori::create([
            'name' => 'OLAHRAGA'
        ]);
    }
}
