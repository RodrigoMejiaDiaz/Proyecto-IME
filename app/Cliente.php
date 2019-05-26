<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as  Moloquent;

class Cliente extends Moloquent
{
    protected $collection = 'clientes';
    protected $fillable = [
    	'nom_cli', 'dni_cli', 'ruc_cli', 'dir_cli', 'tel_cli', 'cel_cli', 'correo_cli', 'cod_ciu', 'estado'
    ];
}
