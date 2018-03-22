<?php

use Faker\Generator as Faker;

$factory->define(\App\Flight::class, function (Faker $faker) {
    return [
        'code' => $faker->postcode,
    ];
});
