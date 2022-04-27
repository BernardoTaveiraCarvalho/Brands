<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Car;
use Faker\Generator as Faker;

$factory->define(Car::class, function (Faker $faker) {
    return [
        'registration'     => $faker->name(),
        'year_of_manufacture' => $faker->year(),
        'color' => $faker->name(),
        'owner_id'     => rand(1,3),
        'brand_id'     => rand(1, 4),
    ];
});
