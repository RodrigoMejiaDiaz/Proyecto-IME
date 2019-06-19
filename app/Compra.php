<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as  Moloquent;

class Compra extends Moloquent
{
	protected $collection = 'compras';
    protected $fillable = [
    	'id_user', 'id_art', 'nom_art','img', 'precio','estado'
    ];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
    public function articulo()
    {
    	return $this->hasOne('App\Articulo');
    }
    public function carro()
    {
        return $this->belongsTo('App\Carro');
    }
}