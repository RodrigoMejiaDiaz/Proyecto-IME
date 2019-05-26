<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as  Moloquent;

class Ciudad extends Moloquent
{
	protected $collection = 'ciudades';
	protected $fillable = [
		'cod_ciu','nom_ciu','cod_pais'
	];
	public $timestamps = false;
    
}
