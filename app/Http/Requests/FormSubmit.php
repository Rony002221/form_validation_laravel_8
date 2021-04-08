<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormSubmit extends FormRequest
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
            'email' => "required|email", 
            'password' => "required|max:4", 
            'check' => 'required'
        ];
    }


    public function messages()
    {
        return [
            'email.required' => 'please type your name',
            'password.required' => 'Please set your password !',
            'check.required' => 'Please check the box'
        ];
    }
}
