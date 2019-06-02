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
	$proveedores_ids = array();
	foreach ($proveedores as $proveedor) 
	{
		$proveedores_ids[] = $proveedor->id;
	}


    return [
        'nom_art' => $faker->word,
        'cod_art' => $faker->ean13,
        'des_art' => $faker->sentence($nbWords = 20, $variableNbWords = true),
        'nom_cat' => $faker->randomElement($categorias_noms),
        'precio' => $faker->numberBetween($min = 20, $max = 2000),
        'stock' => $faker->numberBetween($min = 0, $max = 100),
        'id_prov' => $faker->randomElement($proveedores_ids),
        'estado' => $faker->randomElement($array = array ('A','X'))
    ];
});