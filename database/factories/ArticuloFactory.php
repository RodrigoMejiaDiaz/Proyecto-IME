<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Articulo;
use Faker\Generator as Faker;

$factory->define(Articulo::class, function (Faker $faker) {
    return [
        'nom_art' => $faker->word,
        'des_art' => $faker->sentence($nbWords = 20, $variableNbWords = true),
        'nom_cat' => $faker->randomElement($array = array ('Quirúrjico','Material descartable', 'Material de vidrio', 'Equipo de laboratorio')),
        'precio' => $faker->numberBetween($min = 20, $max = 2000),
        'stock' => $faker->numberBetween($min = 0, $max = 100),
        'estado' => $faker->randomElement($array = array ('A','X'))
    ];
});