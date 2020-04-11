<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'company' => $faker->company,
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'contact' => $faker->name
    ];
});
