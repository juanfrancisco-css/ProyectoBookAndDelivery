<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; //importa una libreria para autenticaciones 
use App\Models\User;//importar 


class PanelController extends Controller
{
    //
    public function show (){  

        if(Auth::check()){ // verificar si hay un usuario con una sesion autenticada 

            /*
            Si existe un usuario ya autenticado no podra acceder al formulario de login
            sera redirigido al inicio
            */
           // return redirect()->route('admin-index');

           return view('admin.index');
        }
        return redirect()->route('index');
       
    }
    
}
