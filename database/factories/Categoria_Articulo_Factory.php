<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Categoria_Articulo;
use Faker\Generator as Faker;

$factory->define(Categoria_Articulo::class, function (Faker $faker) {
    return [
        'nom_cat' => $faker->unique()->randomElement($array = array ('Quirúrjico','Material descartable', 'Material de vidrio', 'Equipo de laboratorio')),
        'des_cat' => $faker->sentence($nbWords = 20, $variableNbWords = true),
        'estado' => $faker->randomElement($array = array ('A','X'))
    ];
});
