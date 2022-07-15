<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'nombre'        => 'required|max:255',
            'talla'         => 'required|max:4',
            'observaciones' => 'required|max:255',
            'cantidad'      => 'required|integer',
            'fecha'         => 'required|date',
            'marca_id'      => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nombre.required'        => 'El nombre es requerido',
            'nombre.max:255'         => 'El nombre es demasiado largo',
            'talla.required'         => 'La talla es requerida',
            'talla.max:4'            => 'La talla debe ser máximo de 4 carácteres',
            'observaciones.required' => 'Las observaciones son requeridas',
            'observaciones.max:255'  => 'Las observaciones son demasiado largas',
            'cantidad.required'      => 'La cantidad es requerida',
            'cantidad.integer'       => 'La cantidad debe ser un número',
            'fecha.required'         => 'La fecha es requerida',
            'fecha.date'             => 'La fecha debe ser una fecha válida',
            'marca_id.required'      => 'La marca es requerida'
        ];
    }
}
