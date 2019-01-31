<?php

namespace servmed\Http\Requests;

use servmed\Http\Requests\Request;

class MedicamentoFormRequest extends Request
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
            'nombre'=>'required|max:45',
            'descripcion'=>'required|max:256',
            'num_inventario'=>'required',
        ];
    }
}
