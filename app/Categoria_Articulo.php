<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as  Moloquent;

class Categoria_Articulo extends Moloquent
{
    protected $collection = "categorias_articulos";
    protected $fillable = [
    	'nom_cat', 'des_cat', 'estado',
    ];
    public $timestamps = false;

    public function articulos()
    {
    	return $this->hasMany('App\Articulo');
    }
}
