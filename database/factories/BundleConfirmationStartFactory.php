<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Banks;
use Faker\Generator as Faker;
use App\Model\ConsignmentLocations;
use App\Model\BundleConfirmationStart;

$factory->define(BundleConfirmationStart::class, function (Faker $faker) {
    return [
        // 'bc_title' => $faker->catchPhrase,
        // 'client_id' => function(){
        //     return Banks::all()->random();
        // },
        // 'strim' => $faker->tld,
        // 'conslocation' => function(){
        //     return ConsignmentLocations::all()->random();
        // },
        // 'audit_trail_number' => $faker->ipv4,
        // 'added_by' => function() {
        //     return App\User::all()->random();
        // },
        // 'confirmation_done' => $faker->numberBetween(0,1),
        // 'ended_on' => $faker->unixTime,
        // 'reference_number' => $faker->ipv6
    ];
});
