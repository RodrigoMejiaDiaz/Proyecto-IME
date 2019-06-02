<?php

use App\User;
use App\Ciudad;

use Illuminate\Support\Str;
use Faker\Generator as Faker;


$factory->define(User::class, function (Faker $faker) {

    $ciudades = Ciudad::all();
    $ciudades_noms = array();
    foreach ($ciudades as $ciudad) 
    {
        $ciudades_noms[] = $ciudad->nom_ciu;
    }

    return [
        'name' => $faker->name,
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'tipo' => $faker->randomElement($array = array ('Usuario')),
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'dni' => $faker->dni,
        'ruc' => $faker->numberBetween($min = 10000000, $max = 99999999),
        'dir' => $faker->address,
        'cel' => $faker->phoneNumber,
        'ciudad' => $faker->randomElement($ciudades_noms),
        'estado' => $faker->randomElement($array = array ('A','X')),
        'remember_token' => Str::random(10),
    ];
});
