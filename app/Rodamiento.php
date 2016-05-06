<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rodamiento extends Model
{
    protected $table = 'rodamientos';
    protected $fillable = ['id_bus','id_ruta','fecha_salida'];
}
