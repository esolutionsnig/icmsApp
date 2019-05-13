<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Announcements;
use Faker\Generator as Faker;

$factory->define(Announcements::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'content' => $faker->paragraph,
        'added_by' => $faker->name
    ];
});
