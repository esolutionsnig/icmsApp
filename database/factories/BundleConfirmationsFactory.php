<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Banks;
use App\Model\BankBranch;
use App\Model\Currencies;
use Faker\Generator as Faker;
use App\Model\BundleConfirmations;
use App\Model\BundleConfirmationStart;

$factory->define(BundleConfirmations::class, function (Faker $faker) {
    return [
        // 'bcs_id' => function(){
        //     return BundleConfirmationStart::all()->random();
        // },
        // 'client' => function(){
        //     return Banks::all()->random();
        // },
        // 'branch' => function(){
        //     return BankBranch::all()->random();
        // },
        // 'seal_number' => $faker->swiftBicNumber,
        // 'currency' => function(){
        //     return Currencies::all()->random();
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
 