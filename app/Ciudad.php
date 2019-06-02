<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as  Moloquent;

class Ciudad extends Moloquent
{
	protected $collection = 'ciudades';
	protected $fillable = [
		'cod_ciu','nom_ciu','id_pais, estado'
	];
	public $timestamps = false;
    
    public function pais()
    {
    	return $this->belongsTo('App\Pais');
    }

    public function users()
    {
    	return $this->hasMany('App\User');
    }
}
