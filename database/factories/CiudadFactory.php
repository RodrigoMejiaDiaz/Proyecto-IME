<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Ciudad;
use Faker\Generator as Faker;

$factory->define(Ciudad::class, function (Faker $faker) {
    return [
    	'cod_ciu' => $faker->numberBetween($min = 000, $max = 999),
    	'nom_ciu' => $faker->city,
    	'cod_pais' => $faker->iban
    ];
});
