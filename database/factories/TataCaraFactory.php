<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\tata_cara;

$factory->define(tata_cara::class, function (Faker $faker) {
    static $number = 1;
    return [
        'nomor' => $number++,
        'description' => $faker->name
    ];
});
