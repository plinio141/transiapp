<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contratacion extends Model
{
    protected $table = 'contrataciones';
    protected $fillable = ['id_administrador','id_empresa','fecha_contratacion'];


    public function administrador()
    {
        return $this->hasOne('App\Administrador');
    }
}
