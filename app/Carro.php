<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as  Moloquent;

class Carro extends Moloquent
{
  	protected $collection = 'carcompras';
    protected $fillable = [
        	'id_compra'
        ];
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
    public function compras()
    {
    	return $this->hasMany('App\Compra');
    }
}
