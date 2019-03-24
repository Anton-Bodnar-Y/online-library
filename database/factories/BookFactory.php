<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\Book::class, function (Faker $faker) {
    return [
        'name' => $faker->text(100),
        'description' => $faker->text(200),
        'total_count' => $faker->numberBetween(10, 20),
        'issued_count' => $faker->numberBetween(1, 10),
    ];
});
