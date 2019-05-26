<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as  Moloquent;

class Articulo extends Moloquent
{
    protected $collection = 'articulos';
    protected $fillable = [
    	'nom_art', 'cod_art','des_art', 'nom_cat', 'precio', 'stock', 'estado'
    ];
    public function categoria()
    {
    	return $this->hasMany('Categoria_Articulo');
    }
}
