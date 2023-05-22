<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // cambiar el valor a true
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'email'=>'required', //campos solicitados a traves del formulario
            'password'=>'required'
        ];
    }

    //La posibilidad de entrar con email o con username 
    public function getCredentials(){  //method ya definido 

      

      

        //solamente regresa estos parametros
        return $this->only('email','password');
    }
}
