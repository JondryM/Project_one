<?php

namespace servmed\Http\Requests;

use servmed\Http\Requests\Request;

class HistoriaFormRequest extends Request
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
            'nombre_paciente'=>'required|max:45',
            'apellido_paciente'=>'required|max:45',
            'cedula_paciente'=>'required',
            'edad'=>'required',
            'Fecha'=>'required',
            'observaciones'=>'required|max:256',
        ];
    }
}
