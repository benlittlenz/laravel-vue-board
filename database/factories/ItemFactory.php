<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Item;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Item::class, function (Faker $faker) {
    return [
        'name' => $faker->jobTitle,
        'description' => $faker->text,
        'unit' => $faker->randomDigit,
        'price' => $faker->randomNumber(2)
    ];
});
