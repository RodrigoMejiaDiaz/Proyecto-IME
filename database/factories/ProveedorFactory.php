<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Proveedor;
use App\Ciudad;
use App\Tipo_proveedor;
use Faker\Generator as Faker;

$factory->define(Proveedor::class, function (Faker $faker) {
    
	$tipos_proveedores = Tipo_proveedor::all();
	$tipos_proveedores_tipos = array();
	foreach ($tipos_proveedores as $tipo_proveedor) 
	{
		$tipos_proveedores_tipos[] = $tipo_proveedor->tipo;
	}

	$ciudades = Ciudad::all();
	$ciudades_ids = array();
	foreach ($ciudades as $ciudad) 
	{
		$ciudades_ids[] = $ciudad->id;
	}

    return [
        'nom_prov' => $faker->name,
        'ruc_prov' => $faker->numberBetween($min = 10000000, $max = 99999999),
        'dir_prov' => $faker->address,
        'tel_prov' => $faker->phoneNumber,
        'correo_prov' => $faker->unique()->companyEmail,
        'tipo' => $faker->randomElement($tipos_proveedores_tipos),
        'id_ciu' => $faker->randomElement($ciudades_ids),
        'estado' => $faker->randomElement($array = array ('A','X')),
    ];
});
