<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Ciudad;
use App\Pais;
use Faker\Generator as Faker;

$factory->define(Ciudad::class, function (Faker $faker) {

	$paises = Pais::all();
	$paises_ids = array();
	foreach ($paises as $pais) 
	{
		$paises_ids[] = $pais->id;
	}

    return [
    	'cod_ciu' => $faker->numberBetween($min = 000, $max = 999),
    	'nom_ciu' => $faker->city,
    	'id_pais' => $faker->randomElement($paises_ids),
    	'estado' => $faker->randomElement($array = array ('A','X')),
    ];
});
