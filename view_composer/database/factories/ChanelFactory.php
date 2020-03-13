<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\chanel;
use Faker\Generator as Faker;

$factory->define(chanel::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
    ];
});
