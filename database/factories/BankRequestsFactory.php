<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Banks;
use App\Model\BankReps;
use App\Model\Vehicles;
use App\Model\BankRequests;
use Faker\Generator as Faker;
use App\Model\ConsignmentLocations;

$factory->define(BankRequests::class, function (Faker $faker) {
    return [
        'er_name' => $faker->word,
        'bank_id' => function(){
            return Banks::all()->random();
        },
        'location_code' => $faker->postcode,
        'consignment_location_id' => function(){
            return ConsignmentLocations::all()->random();
        },
        'cit_reciever_id' => function() {
            return App\User::all()->random();
        },
        'cit_confirmation_token' => $faker->uuid,
        'vehicle_id' => function(){
            return Vehicles::all()->random();
        },
        'cit' => $faker->numberBetween(0,1),
        'cit_confirmation' => $faker->numberBetween(0,1),
        'cit_confirmation_date' => $faker->unixTime,
        'client_rep' => function(){
            return BankReps::all()->random();
        },
        'cp_done' => $faker->numberBetween(0,1),
        'er_status' => $faker->numberBetween(0,3),
        'preannounced' => $faker->numberBetween(0,1),
        'date_execution' => $faker->date
    ];
});