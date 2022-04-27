<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Owner;
use Faker\Generator as Faker;

$factory->define(Owner::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'birth_date' => new $faker->dateTime(),
        'wallet_money' => $faker->randomNumber(),
        'country_id'     => rand(1, 4),
    ];
});

