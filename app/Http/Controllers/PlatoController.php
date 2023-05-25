<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plato;

class PlatoController extends Controller
{
    
    /**
     * Lista en la web
     */
    public function vista()
    {
        $platos = Plato::all();
        $categorias = Plato::pluck('categoria')->unique();

        return view('modulos.carta', compact('platos', 'categorias'));
    }


    /**
     * lista en dashboard
     */
    public function index()
    {
        $platos = Plato::all();

        return view('carta.index', compact('platos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('carta.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $validatedData = $request->validate([
        'nombre' => 'required',
        'descripcion' => 'required',
        'precio' => 'required|numeric',
        'foto' => 'required|image|mimes:png',
        'activo' => 'nullable',
        'categoria' => 'required',
    ]);

    $plato = new Plato();
    $plato->nombre = $validatedData['nombre'];
    $plato->descripcion = $validatedData['descripcion'];
    $plato->precio = $validatedData['precio'];
    $plato->activo = $request->has('activo');
    $plato->categoria = $validatedData['categoria'];
    $plato->save();

    $file = $request->file('foto');
    $filename = $plato->id . '.png';
    $file->move(public_path('images'), $filename);

    return redirect()->back()->with('success', 'Plato creado exitosamente.');
    }

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $plato = plato:: find($id); 

        return view('carta.edit',['plato'=>$plato]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required|numeric',
            'foto' => 'nullable|image|mimes:png',
            'activo' => 'nullable',
            'categoria' => 'required',
        ]);

        $plato = Plato::findOrFail($id);
        $plato->nombre = $validatedData['nombre'];
        $plato->descripcion = $validatedData['descripcion'];
        $plato->precio = $validatedData['precio'];
        $plato->activo = $request->has('activo');
        $plato->categoria = $validatedData['categoria'];

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = $plato->id . '.png';

            // Eliminar la foto antigua
            if (file_exists(public_path('images/' . $filename))) {
                unlink(public_path('images/' . $filename));
            }

            // Guardar la nueva foto
            $file->move(public_path('images'), $filename);
            $plato->foto = $filename;
        }

        $plato->save();

        return redirect()->back()->with('success', 'Plato actualizado exitosamente.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $plato = Plato::findOrFail($id);

        // Eliminar el archivo de la foto si existe
        if ($plato->foto && file_exists(public_path('images/' . $plato->foto))) {
            unlink(public_path('images/' . $plato->foto));
        }

        $plato->delete();

        return redirect()->back()->with('success', 'Plato eliminado exitosamente.');
    }
}
