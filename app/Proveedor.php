<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as  Moloquent;

class Proveedor extends Moloquent
{
    protected $collection = "proveedores";
    protected $fillable = [
    	'nom_prov', 'ruc_prov', 'dir_prov', 'tel_prov', 'correo_prov', 'tipo', 'id_ciu', 'estado'
    ];

    public function ciudad()
    {
    	return $this->belongsTo('App\Ciudad');
    }

    public function articulos()
    {
    	return $this->hasMany('App\Articulo');
    }
}
