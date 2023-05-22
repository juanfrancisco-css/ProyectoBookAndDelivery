<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session; //importar la libreria 
use Illuminate\Support\Facades\Auth; //Importar una clase para manejar autenticaciones (cuenta con diversos methodos)


class LogoutController extends Controller
{
    public function logout(){

        /*
        Actualizar todo el flujo
        liberar todo lo q tenga q liberar
        */
        Session::flush(); 

         Auth::logout(); //method que termina la sesión
    
         return redirect()->route('login');
        }
}
