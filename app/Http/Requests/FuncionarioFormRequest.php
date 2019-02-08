<?php

namespace servmed\Http\Requests;

use servmed\Http\Requests\Request;

class FuncionarioFormRequest extends Request
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
            'rif'=>'required|max:10',
            'nombre'=>'required|max:45',
            'apellido'=>'required|max:45',
            'cedula'=>'required|max:10',
            'correo'=>'required|max:45',
            'edad'=>'required',
            'fecha_nacimiento'=>'required',
            'telefono'=>'required|max:15',

        ];
    }
}
