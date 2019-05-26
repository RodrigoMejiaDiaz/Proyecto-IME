<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Cliente;
use Faker\Generator as Faker;



$factory->define(Cliente::class, function (Faker $faker) {
    return [
        'nom_cli' => $faker->name,
        'dni_cli' => $faker->dni,
        'ruc_cli' => $faker->randomNumber,
        'dir_cli' => $faker->address,
        'cel_cli' => $faker->phoneNumber,
        'correo_cli' => $faker->email,
        'cod_ciu' => $faker->numberBetween($min = 000, $max = 999),
        'estado' => $faker->randomElement($array = array ('A','X'))

    ];
});
