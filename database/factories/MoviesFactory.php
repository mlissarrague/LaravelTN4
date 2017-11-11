<?php

use Faker\Generator as Faker;
use App\Movie;

$factory->define(Movie::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'rating' => 1.2,
        'awards' => rand(1, 50),
        'release_date' =>  \Carbon\Carbon::now()->subYears(5),
        'revenue' => '5000'
    ];
});
