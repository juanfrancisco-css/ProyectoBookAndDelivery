<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; //importar una libreria para autenticaciones 
use App\Models\Contacto ; //importar 
use Illuminate\Support\Facades\Mail; //importar
use App\Mail\RespuestaEmail;//importar


class ContactoController extends Controller
{

//devuleve la vista
    public function  create()
    {

     
       
        return view('contacto.create');

      
    }
    //crear

    public function store(Request $request){
        $request->validate([
            'nombre'=>'required',
           'email'=> 'required',
           'asunto'=> 'required',
           'mensaje'=>'required',
          
        ]);
        $contactos =  new Contacto;
        $contactos->nombre = $request->nombre;
        $contactos->email = $request->email;
        $contactos->asunto = $request->asunto;
        $contactos->mensaje= $request->mensaje;
        $contactos->save();

        return redirect ()->route('contacto-create')->with('success','Mensaje enviado   ' );
   
    }

    //listar
    public function index()
    {

        if(Auth::check()){
            $contactos =Contacto:: all(); //nos traera todo los registros
    // $reservas = reserva:: paginate(5); //solo 5 registros en pagina
        return view('contacto.index')->with('contactos', $contactos); //enviarle la variable a la vista 
        }
    else
    return redirect()->route('index');


        
    }

    public function edit($id){

        $contacto = Contacto:: find($id); 

        return view('contacto.edit',['contacto'=> $contacto]);
    }

    public function update(Request $request ,$id){

        $contacto = Contacto:: find($id); 
        $contacto->nombre = $request->nombre;
        $contacto->email = $request->email;
        $contacto->asunto = $request->asunto;
        $contacto->mensaje= $request->mensaje;
       // $contacto->save();

         // Enviar el correo electrónico de respuesta
         $user = ['nombre' =>    $contacto->nombre, 'email' => $contacto->email , 'asunto'=>  $contacto->asunto , 'mensaje'=> $contacto->mensaje ];
         Mail::to($user['email'])->send(new RespuestaEmail($contacto));


         //borrar 
         $contacto = Contacto:: find($id); 
         $contacto->delete();
         
        return redirect()->route('contacto-index')->with('success','Mensaje enviado!!' );
    
    }

    public function destroy($id){
        $contacto = Contacto:: find($id); 
        $contacto->delete();
       

        return redirect()->route('contacto-index')->with('success','Has eliminado un mensaje !!');
    
    }


    //
}
