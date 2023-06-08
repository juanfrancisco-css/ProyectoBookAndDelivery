<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Plato;
use Illuminate\Http\Request;
use Session;


class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('modulos.pedido1');
    }
    /**
     * Display a listing of the resource.
     */
    public function admin_index()
    {
        $pedidos = Pedido::all();
        return view('pedidos.index', compact('pedidos'));

    }
    public function admin_show_order($id){
    
        $pedido = Pedido:: find($id); 

        return view('pedidos.pedido',['pedido'=>$pedido]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    /**
     * Add item.
     */
    public function add(Request $request)
    {
        $platoId = $request->input('plato_id');

        // Obtener el plato desde la base de datos según el ID
        $plato = Plato::find($platoId);

        // Verificar si el plato existe
        if ($plato) {
            // Obtener el carrito actual desde la sesión
            $cart = session()->get('cart', []);

            // Verificar si el plato ya está en el carrito
            if (isset($cart[$platoId])) {
                // Si el plato ya está en el carrito, incrementar la cantidad
                $cart[$platoId]['cantidad']++;
            } else {
                // Si el plato no está en el carrito, agregarlo con una cantidad de 1
                $cart[$platoId] = [
                    'plato' => $plato,
                    'cantidad' => 1
                ];
            }

            // Actualizar el carrito en la sesión
            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Plato agregado al carrito.');
        }

        return redirect()->back()->with('error', 'Error al agregar el plato al carrito.');
    }

    /**
     * Remove plato.
     */

    public function remove(Request $request)
    {
        $platoId = $request->input('plato_id');

        if (session()->has('cart') && array_key_exists($platoId, session('cart'))) {
            $cart = session('cart');
            unset($cart[$platoId]);
            session(['cart' => $cart]);
        }

        return redirect()->back()->with('success', 'Plato eliminado del carrito.');
    }

     /**
     * Remove item de un plato.
     */
    public function decrement(Request $request)
    {
        $platoId = $request->input('plato_id');

        if (session()->has('cart') && array_key_exists($platoId, session('cart'))) {
            $cart = session('cart');
            $cart[$platoId]['cantidad']--;

            if ($cart[$platoId]['cantidad'] <= 0) {
                unset($cart[$platoId]);
            }

            session(['cart' => $cart]);
        }

        return redirect()->back()->with('success', 'Item eliminado del carrito.');
    }


    /**
     * Add item de un plato.
     */
    public function increment(Request $request)
    {
        $platoId = $request->input('plato_id');

        if (session()->has('cart') && array_key_exists($platoId, session('cart'))) {
            $cart = session('cart');
            $cart[$platoId]['cantidad']++;
            session(['cart' => $cart]);
        }

        return redirect()->back()->with('success', 'Item añadido al carrito.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required',
            'correo' => 'required|email',
            'telefono' => 'required',
            'direccion' => 'required',
        ]);

        // Obtener los platos añadidos al carrito de la variable de sesión
        $platos = session('cart');

        // Calcular el importe total sumando los precios de los platos
        $importe = 0;
        
        foreach ($platos as $plato) {
            $importe += $plato['plato']->precio * $plato['cantidad'];
        }
        

        // Convertir array id-platos/cantidad a array id-cantidad
        foreach ($platos as $plato) {
            $platos_id_cantidad[$plato['plato']->id]=$plato['cantidad'];
        }

        // Convertir a json el array anterior para guardar en la tabla
        $platos_json=json_encode($platos_id_cantidad);      

        // Crear un nuevo objeto Pedido con los datos del formulario y los platos
        $pedido = new Pedido([
            'nombre' => $request->input('nombre'),
            'correo' => $request->input('correo'),
            'telefono' => $request->input('telefono'),
            'direccion' => $request->input('direccion'),
            'platos' => $platos_json,
            'importe' => $importe,
            'enviado' => false, // Por defecto, el pedido no está enviado
        ]);

        // Guardar el pedido en la base de datos
        $pedido->save();

        // Limpiar la variable de sesión del carrito
        Session::forget('cart');

        // Redireccionar a la vista de confirmación de pedido
        //return redirect()->route('pedido.confirmacion', ['pedido' => $pedido]);
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Pedido $pedido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pedido $pedido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pedido $pedido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pedido $pedido)
    {
        //
    }
}
