<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as  Moloquent;

class Articulo extends Moloquent
{
    protected $collection = 'articulos';
    protected $fillable = [
    	'nom_art', 'cod_art','des_art', 'nom_cat', 'precio', 'img', 'stock', 'prov', 'estado'
    ];
    public function categoria()
    {
    	return $this->belongsTo('App\Categoria_Articulo');
    }

    public function compra()
    {
    	return $this->belongsTo('App\Compra');
    }

    public function proveedor()
    {
        return $this->belongsTo('App\Proveedor');
    }
}
