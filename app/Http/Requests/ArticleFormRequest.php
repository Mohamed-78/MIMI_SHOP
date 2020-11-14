<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleFormRequest extends FormRequest
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
            
            'titre'=> 'required',
            'photo'=> 'required',
            'photos'=> 'required',
            'prix'=> 'required',
            'description'=> 'required',
        ];
    }

    public function messages()
    {
        return [

            'titre.required' => 'Saisissez un titre',
            'photo.required' => 'Choisissez une photo',
            'prix.required' => 'Saisissez un prix',
            'description.required' => 'Saisissez une description',
            
        ];
    }
}
