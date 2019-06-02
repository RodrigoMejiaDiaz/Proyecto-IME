<?php

use App\Tipo_proveedor;
use Faker\Generator as Faker;

$factory->define(Tipo_proveedor::class, function (Faker $faker) {
    return [
        'tipo' => $faker->unique()->randomElement($array = array ('Distribuidor','Importador', 'Fabricante')),
        'estado' => $faker->randomElement($array = array ('A','X')),
    ];
});
