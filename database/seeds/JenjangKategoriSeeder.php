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
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 10; $i++){
            Jenjang::create([
                'name' => $faker->city,
                ]);
            }
        for($i = 1; $i <= 10; $i++){
            Kategori::create([
                'name' => $faker->address,
                ]);
            }
        }
    }
