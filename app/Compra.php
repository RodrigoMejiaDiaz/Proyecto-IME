<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as  Moloquent;

class Compra extends Moloquent
{
	protected $collection = 'compras';
    protected $fillable = [
    	'id_user', 'id_art', 'estado'
    ];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function articulo()
    {
    	return $this->hasOne('App\Articulo');
    }
}
