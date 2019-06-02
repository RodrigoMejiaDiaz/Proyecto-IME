<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Compra;
use App\User;
use App\Articulo;
use Faker\Generator as Faker;

$factory->define(Compra::class, function (Faker $faker) {

	$users = User::all();
	$users_ids = array();
	foreach ($users as $user) 
	{
		$users_ids[] = $user->id;
	}

	$articulos = Articulo::all();
	$articulos_ids = array();
	foreach ($articulos as $articulo) 
	{
		$articulos_ids[] = $articulo->id;
	}

    return [
    	'id_user' => $faker->randomElement($users_ids), 
    	'id_ar' => $faker->randomElement($articulos_ids),
    	'estado' => $faker->randomElement($array = array ('A','X')),
    ];
});
