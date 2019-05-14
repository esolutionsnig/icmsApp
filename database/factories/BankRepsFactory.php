<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\BankReps;
use App\Model\BankBranch;
use Faker\Generator as Faker;

$factory->define(BankReps::class, function (Faker $faker) {
    return [
        // 'username' => $faker->firstName,
        // 'branch_id' => function(){
        //     return BankBranch::all()->random();
        // },
        // 'added_by' => function() {
        //     return App\User::all()->random();
        // },
    ];
});
