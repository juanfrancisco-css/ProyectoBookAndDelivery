<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reserva; //importar 
use Illuminate\Support\Facades\Auth; //importar una libreria para autenticaciones 
use Illuminate\Support\Facades\Mail; //importar
use App\Mail\ReservaEmail; //importar 
use Illuminate\Support\Str;

class ReservaController extends Controller
{
    

    public function index()
    {

        if(Auth::check()){
     // $reservas = reserva:: all(); //nos traera todo los registros
     $reservas = reserva:: paginate(5);
        return view('reservas.index')->with('reservas',$reservas); //enviarle la variable a la vista 
        }
    else
    return redirect()->route('index');


        
    }

    public function  create()
    {

     
       
        return view('reservas.create');

      
    }

    
   

    public function store(Request $request){
        $request->validate([
            'nombre'=>'required',
            'telefono'=>'required',
           'email'=> 'required',
           'NumPersonas'=> 'required',
           'fecha'=>'required',
           'hora'=>'required'
        ]);
        $reserva =  new reserva;
        $reserva->nombre = $request->nombre;
        $reserva->telefono = $request->telefono;
        $reserva->email = $request->email;
        $reserva->NumPersonas = $request->NumPersonas;
        $reserva->fecha = $request->fecha;
        $reserva->hora = $request->hora;
        $reserva->confirmada = true;
        $reserva->token = Str::random(32);
        $reserva->save();

        /**************************agregado */
        if ($reserva->id) {
            // Enviar el correo electrónico de confirmación
            Mail::to($reserva->email)->send(new ReservaEmail($reserva));
    
            return redirect ()->route('reserva-create')->with('success','Reserva realizada para el dia '. $reserva->fecha . ' a las '. $reserva->hora  );
   
        } else {
            return 'Error al guardar la reserva.';
        }

        // Enviar el correo electrónico de confirmación
        $user = ['name' =>  $reserva->nombre, 'email' =>  $reserva->email];
        Mail::to($user['email'])->send(new ReservaEmail($reserva));
/******************************fin */

       // return redirect ()->route('reserva-create')->with('success','Reserva realizada para el dia '. $reserva->fecha . ' a las '. $reserva->hora  );
   
    }

    public function edit($id){

        $reserva = reserva:: find($id); 

        return view('reservas.edit',['reserva'=>$reserva]);
    }

    public function paso1(){

        return view('reservas.paso1');
    }
    public function  paso2(Request $request)
    {

        $NumPersonas = $request->NumPersonas;
        $fecha = $request->fecha;
     
       return view('reservas.paso2');
       
    }

    public function  paso3(Request $request)
    {

        $NumPersonas = $request->NumPersonas;
        $fecha = $request->fecha;
        $hora=$request->hora;
     
       return view('reservas.paso3');
       
    }

    public function paso4(Request $request){

        //añadido
        $request->validate([
            'nombre' => 'required',
             'telefono' => 'required',
           'email'=> 'required',
           'NumPersonas'=> 'required',
           'fecha'=>'required',
           'hora'=>'required'
        ]);
        //fin
        $NumPersonas = $request->NumPersonas;
        $fecha = $request->fecha;
        $hora=$request->hora;
        $nombre=$request->nombre;
        $telefono=$request->telefono;
        $email=$request->email;
     
       return view('reservas.paso4');

    }
    public function  paso5(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
             'telefono' => 'required',
           'email'=> 'required',
           'NumPersonas'=> 'required',
           'fecha'=>'required',
           'hora'=>'required'
        ]);
        $reserva =  new reserva;
        $reserva->nombre = $request->nombre;
        $reserva->telefono = $request->telefono;
        $reserva->email = $request->email;
        $reserva->NumPersonas = $request->NumPersonas;
        $reserva->fecha = $request->fecha;
        $reserva->hora = $request->hora;
        $reserva->confirmada = false;
        $reserva->token = Str::random(32);
        $reserva->save();

        /**************************agregado */
        if ($reserva->id) {
            // Enviar el correo electrónico de confirmación
            Mail::to($reserva->email)->send(new ReservaEmail($reserva));
    
            return redirect ()->route('reserva-paso1')->with('success','Te hemos enviado un correo electronico con los detalles  de la reservas y un botón para confirmarla'  );
   
        } else {
            return redirect ()->route('reserva-paso1')->withErrors('Ups lo sentims pero en este momento no podemos gestionar tu reserva <br>Para mas infomación pongase en contacto con nosotros');
          
           // return 'Error al guardar la reserva.';
        }

        // Enviar el correo electrónico de confirmación
        $user = ['name' =>  $reserva->nombre, 'email' =>  $reserva->email];
        Mail::to($user['email'])->send(new ReservaEmail($reserva));
/******************************fin */
       
    }

    public function cancelar(){

        return view('reservas.paso1');
    }

    public function modificarHora(){

        return view('reservas.paso2');
    }
    public function update(Request $request ,$id){

        $reserva = reserva:: find($id);
        $reserva->nombre = $request->nombre;
        $reserva->telefono = $request->telefono;
        $reserva->email = $request->email;
        $reserva->NumPersonas = $request->NumPersonas;
        $reserva->fecha = $request->fecha;
        $reserva->hora = $request->hora;
        $reserva->save();

        return redirect()->route('reserva-index')->with('success','Reserva de ' . $reserva->nombre .'  sido actualizada para el dia ' . $reserva->fecha );
    
    }


    public function destroy($id){
        $reserva = reserva:: find($id);
        $reserva->delete();
       

        return redirect()->route('reserva-index')->with('success','La reserva de ' .  $reserva->nombre .' ha sido eliminada');
    
    }

    public function confirmar($token)
    {
        $reserva = Reserva::where('token', $token)->first();

        if ($reserva) {
            $reserva->confirmada = true;
            $reserva->save();

            
        }
        return redirect ()->route('reserva-paso1')->with('success','Reserva confirmada'  );
    }
    
}
