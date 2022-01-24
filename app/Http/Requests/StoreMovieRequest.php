<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMovieRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
        // return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required | max:10',
            'synopsis' => 'required | min: 50',
            'type' => 'required',
            'genere' => 'required',
            'duration' => 'required',
            'year' => 'required',
            'price' => 'required',
        ];
    }
    /**
     * Este metodo sirve para personalizar el nombre del campo para cada formulario
     */
    public function attributes()
    {
        return [
            'title' => 'titol',
        ];
    }
    /**
     * Este metedo personaliza los mensajes de error
     */
    public function messages()
    {
        return [
            'synopsis.required' => 'Tio necesitas mas de 50 letras',
        ];
    }
}
