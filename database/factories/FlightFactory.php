<?php

use Faker\Generator as Faker;

$factory->define(\App\Flight::class, function (Faker $faker) {
    return [
        'code' => $faker->postcode,
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        }
    ];
});
