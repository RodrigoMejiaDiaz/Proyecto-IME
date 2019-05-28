<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Compra;
use Faker\Generator as Faker;

$factory->define(Compra::class, function (Faker $faker) {
    return [
    	'id_user' => $faker->uuid, 
    	'id_ar' => $faker->uuid,
    	'estado' => $faker->randomElement($array = array ('A','X')),
    ];
});
