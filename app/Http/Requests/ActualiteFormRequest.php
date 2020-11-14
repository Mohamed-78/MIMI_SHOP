<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActualiteFormRequest extends FormRequest
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
            
            'titre' => 'required',
            'date' => 'required',
            'description'=>'required|max:50',
            'photo'=>'required',
        ];
    }


    public function messages()
    {
        return [

            'titre.required' => 'Vous devez saisir un titre',
            'date.required' => 'Vous devez choisir une date',
            'photo.required' => 'Choisissez une photo',
            'description.required' => 'Vous devez saisir une description',
            'description.max' => 'Minimun :max caractères',
            
        ];
    }
}
