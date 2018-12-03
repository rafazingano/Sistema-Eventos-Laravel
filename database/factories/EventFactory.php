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

$factory->define(App\Event::class, function (Faker $faker) {

    $filepath = public_path('storage/images');

    if(!File::exists($filepath)){
        File::makeDirectory($filepath);
    }

    return [
        'image' => $faker->image($filepath, '800', '300', '', false),
        'name' => $faker->sentence(4),
        'local' => $faker->address,
        'description' => $faker->realText(500),
        'date' => $faker->dateTimeBetween('now', '+3 years'),
        'price' => $faker->randomFloat(2, 10, 100),
        'status' => true,
    ];
});
