<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Administrador extends Authenticatable
{
    protected $table = 'administradores';
    protected $fillable = ['id','name','password','nombre_administrador','apellido_administrador'];
}
