<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as  Moloquent;

class Pais extends Moloquent
{
	protected $collection = 'paises';
	protected $fillable = [
		'nom_pais','cod_pais, estado'
	];
	public $timestamps = false;

}
