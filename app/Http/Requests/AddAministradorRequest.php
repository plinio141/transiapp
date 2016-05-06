<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AddAministradorRequest extends Request
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
            'id' => 'required|unique:administradores',
            'name' => 'required|unique:administradores',
            'nombre_administrador' => 'required',
            'apellido_administrador' => 'required',
            'password' => 'required|min:6',
            'empresa' => 'required',
        ];
    }
}
