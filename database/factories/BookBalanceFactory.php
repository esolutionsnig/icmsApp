<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\BookBalance;
use Faker\Generator as Faker;

$factory->define(BookBalance::class, function (Faker $faker) {
    return [
        'bb_client' => function(){
            return Banks::all()->random();
        },
        'bb_balance' => $faker->numberBetween(100,1000),
    ];
});
