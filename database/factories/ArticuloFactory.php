<?php


use App\Articulo;
use App\Categoria_Articulo;
use App\Proveedor;

use Faker\Generator as Faker;

$factory->define(Articulo::class, function (Faker $faker) {

	$categorias = Categoria_Articulo::all();
	$categorias_noms  = array();
	foreach ($categorias as $categoria) 
	{
		$categorias_noms[] = $categoria->nom_cat;
	}

	$proveedores = Proveedor::all();
	$proveedores_noms = array();
	foreach ($proveedores as $proveedor) 
	{
		$proveedores_noms[] = $proveedor->nom_prov;
	}


    return [
        'nom_art' => $faker->sentence($nbWords = 7, $variableNbWords = true),
        'cod_art' => $faker->ean13,
        'des_art' => $faker->sentence($nbWords = 20, $variableNbWords = true),
        'nom_cat' => $faker->randomElement($categorias_noms),
        'precio' => $faker->numberBetween($min = 20, $max = 2000),
        'img' => $faker->image('public/images', 250, 218, null, false),
        'stock' => $faker->numberBetween($min = 0, $max = 100),
        'prov' => $faker->randomElement($proveedores_noms),
        'estado' => $faker->randomElement($array = array ('A','X'))
    ];
});