<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as  Moloquent;

class Compra extends Moloquent
{
	protected $collection = 'compras';
    protected $fillable = [
    	'id_user', 'id_ar', 'estado'
    ];

    public function user()
    {
    	return $this->hasOne(App\User);
    }

    public function articulo()
    {
    	return $this->hasOne(App\Articulo);
    }
}
