<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoria extends FormRequest
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
            
            'nombrecategoria' => 'required|min:3|unique:categorias',
            'imagen' => 'required|image'

        ];
    }

    public function messages()
    {
        return[
            'nombrecategoria.required'=> 'El nombre de la categoria es requerido.',
            'nombrecategoria.min'=>'El nombre de la categoria debe tener minimo 3 caracteres.',
            'nombrecategoria.unique'=>'El nombre de la categoria ya existe!.',
            'imagen.required'=>'La imagen es obligatoria!.',
            'imagen.image' => 'El archivo debe ser una imagen.'
        ];
    }
}
