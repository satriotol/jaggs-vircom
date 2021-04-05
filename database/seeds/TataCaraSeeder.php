<?php

use App\tata_cara;
use Illuminate\Database\Seeder;

class TataCaraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(tata_cara::class,5)->create();
    }
}
