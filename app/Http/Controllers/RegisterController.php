<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;//importar 
use App\Http\Requests\RegisterRequester; //importar
use Illuminate\Support\Facades\Auth; //importa una libreria para autenticaciones 

class RegisterController extends Controller
{
    
    public function show (){

        //si esta autenticado va para la pagina home
       //En cada contoller cuando quieres validar que el usuario esta autenticado vamos utilizar  'Auth:check'
       if(Auth::check()){
            /*
           Si existe un usuario ya autenticado no podra acceder al formulario de registro
           sera redirigido al inicio
           */
          // return redirect()->route('admin-index');
          return view('admin.register');
       }

      
       return redirect()->route('index');
   }


   //crear un objeto 'RegisterRequest' para controlar las validaciones /autenticaciones 
   public function register(RegisterRequester $request){
  /* Tenemos dos opciones para dar de alta 
     opcion 1) */
     $user =  User::create($request->validated()); //Hara la llamada a nuestras reglas automaticamente ( method rules)
   
     
  /*  opcion 2)
                     $request->validate([
                                             'name'=> 'required|unique:categories|max:255',
                                             'color'=>'required|max:7'
                                        ]);
 
                     $user = new User;
                     $user->name=$request->name;
                     $user->color=$request->color;
                     $user->save();
     */
     return redirect ()->route('registrarse')->with('success','Cuenta Creada Exitosamente');
   }
   
  

}
