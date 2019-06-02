<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Jenssegers\Mongodb\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use Notifiable;


    protected $fillable = [
        'name', 'password', 'tipo', 'dni', 'ruc', 'dir', 'tel', 'cel', 'email', 'ciudad', 'estado' 
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function ciudad()
    {
        return $this->belongsTo('App\Ciudad');
    }

    public function compras()
    {
        return $this->embedsMany('App\Compra');
    }

}
