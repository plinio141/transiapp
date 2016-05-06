<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AddEmpresaRequest extends Request
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
            'id_empresa' => 'required|unique:empresas',
            'nombre_empresa' => 'required|unique:empresas',
            //'administrador' => 'required',
        ];
    }
}
