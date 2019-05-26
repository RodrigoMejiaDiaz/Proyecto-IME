<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as  Moloquent;

class Pais extends Moloquent
{
	protected $table = 'paises';
	protected $fillable = [
		'nom_pais'
	];
	public $timestamps = false;

}
