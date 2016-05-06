<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AddRutaRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id_ruta' => 'required|unique:rutas',
            'lugar_salida' => 'required',
            'lugar_destino' => 'required|different:lugar_salida',
            'hora_inicio'=> 'required',
            'hora_final'=> 'required|different:hora_inicio',
            'tarifa'=>'required',
            'activa'=> 'required',
        ];
    }
}
