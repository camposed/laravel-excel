<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

use Illuminate\Support\Str;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->title,
        'description' => $faker->paragraph(1),
        'serial' => Str::random(8),
        'stock' => $faker->numberBetween(0, 200)
    ];
});
