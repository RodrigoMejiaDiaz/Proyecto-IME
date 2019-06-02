<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as  Moloquent;

class Tipo_proveedor extends Moloquent
{
    protected $collection = "tipos_proveedores";
    protected $fillable = [
    	'tipo', 'des_tipo', 'estado'
    ];

	public function proveedores()
	{
		return $this->hasMany('App\Proveedor');
	}    
}
