<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EchangeFormRequest extends FormRequest
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
            
            'name'=> 'required',
            'email'=> 'required',
            'number'=> 'required|integer',
            'photo'=>'required',
            'message'=> 'required',
        ];
    }

    public function messages()
    {
        return [

            'name.required' => 'Saisissez un nom',
            'email.required' => 'Saisissez un email',
            'number.required' => 'Saisissez un contact',
            'photo.required' => 'Choisissez une photo',
            'number.integer' => 'Uniquement des chiffres',
            'message.required' => 'Saisissez un message',
            
        ];
    }
}
