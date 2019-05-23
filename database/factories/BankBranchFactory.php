<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Banks;
use App\Model\BankBranch;
use Faker\Generator as Faker;

$factory->define(BankBranch::class, function (Faker $faker) {
    return [
        'bank_id' => function(){
            return Banks::all()->random();
        },
        'branch_location' => $faker->streetAddress,
        'branch_location_code' => $faker->buildingNumber,
        'branch_cmu' => function() {
            return App\User::all()->random();
        },
        'branch_rep' => function() {
            return App\User::all()->random();
        },
        'added_by' => function() {
            return App\User::all()->random();
        },
    ];
});
