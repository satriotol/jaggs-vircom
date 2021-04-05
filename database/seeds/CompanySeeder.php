<?php

use App\Companys;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Companys::create([
            // main
            'name' => 'VIRCOM',
            'email' => 'vircom@gmail.com',
            'address'=>'Pandean Lamper',
            'phone_number' => '089620755330',

            // beranda
            'description_beranda' => 'ini deksripsi beranda',
            'video_profile' => 'https://youtu.be/MiKuVyTQ9wc',

            // tentang
            'description' => 'ini deskripsi',
            'vision' => 'ini visi',
            'mission' => 'ini misi',
            'apa_kata_mereka' => 'ini apa kata mereka',

            // sosial media
            'instagram' => 'https://www.instagram.com/satriotol/',
            'youtube' => 'https://www.instagram.com/satriotol/'
        ]);
    }
}
