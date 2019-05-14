<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Vehicles;
use Faker\Generator as Faker;

$factory->define(Vehicles::class, function (Faker $faker) {
    return [
        'vehicle_number' => $faker->bothify('Hello ##??'),
        'vehicle_name' => $faker->safeColorName,
        'vehicle_slug' => $faker->numerify('Hello ###')
    ];
});
