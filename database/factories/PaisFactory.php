<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Pais;
use Faker\Generator as Faker;

$factory->define(Pais::class, function (Faker $faker) {
    return [
        'nom_pais' => $faker->country,
        'cod_pais' => $faker->iban,
        'estado' => $faker->randomElement($array = array ('A','X')),
    ];
});
