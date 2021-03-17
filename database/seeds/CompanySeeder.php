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
            'name' => 'VIRCOM',
            'email' => 'vircom@gmail.com',
            'phone_number' => '089620755330',
            'address'=>'Pandean Lamper',
            'description' => 'ini deskripsi',
            'vision' => 'ini visi',
            'mission' => 'ini misi',
        ]);
    }
}
