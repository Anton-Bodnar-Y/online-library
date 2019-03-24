<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Book::class, function (Faker $faker) {
    return [
        'name' => $faker->text(100),
        'description' => $faker->text(200),
        'total_count' => $faker->numberBetween(10, 20),
        'issued_count' => $faker->numberBetween(1, 10),
    ];
});
