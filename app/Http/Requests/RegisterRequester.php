<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequester extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; //cambiar el valor a true
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required',
            'surname'=>'required',
           'email'=> 'required|unique:users,email',
           'password'=>'required|min:8',
           'password_confirmation'=>'required|same:password' //requerido y que la password sea igual 
    

             
       ];
    }
}
