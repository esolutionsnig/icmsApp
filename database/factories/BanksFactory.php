<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Banks;
use Faker\Generator as Faker;

$factory->define(Banks::class, function (Faker $faker) {
    return [
        'bank_name' => $faker->company,
        'bank_code' => $faker->buildingNumber,
        'added_by' => function() {
            return App\User::all()->random();
        }
    ];
});
