<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Kategori;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Kategori::class, function (Faker $faker) {
    return [
        'parent_id' => factory(Kategori::class)->states('children')->create()->id,
        'name' =>  $faker->name,
    ];
});
