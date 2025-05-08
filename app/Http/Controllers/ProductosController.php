<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;
use App\Models\Categorias;
use Illuminate\Support\Facades\Storage;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['productos'] = Productos::paginate(5);
        return view('categorias', $datos);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // Trae todas las categorías ordenadas
        $categorias = Categorias::orderBy('nombre')->get();

        // Retorna la vista y le pasa $categorias
        return view('productos.create', [
            'categorias'   => $categorias,
            'categoria_id' => $request->query('categoria_id'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'        => 'required|string|min:3|max:100',
            'descripcion'   => 'required|string|min:5',
            'precio'        => 'required|numeric|min:0',
            'imagen'        => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'categoria_id'  => 'required|exists:categorias,id',
        ]);

        $datos = $request->except('_token');

        if ($request->hasFile('imagen')) {
            $datos['imagen'] = $request->file('imagen')->store('uploads', 'public');
        }

        Productos::create($datos);

        return redirect()
            ->route('dashboard.categorias.show', $datos['categoria_id'])
            ->with('success', 'Producto agregado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Productos $producto)
    {
        //
        return redirect()->route('productos.edit', $producto->id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $producto = Productos::findOrFail($id);
        $categorias = Categorias::orderBy('nombre')->get();
        return view('productos.edit', compact('producto','categorias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'nombre'        => 'required|string|min:3|max:100',
            'descripcion'   => 'required|string|min:5',
            'precio'        => 'required|numeric|min:0',
            'imagen'        => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'categoria_id'  => 'required|exists:categorias,id',
        ]);

        $datos = $request->except(['_token','_method']);

        if ($request->hasFile('imagen')) {
            $producto = Productos::findOrFail($id);
            Storage::delete('public/'.$producto->imagen);
            $datos['imagen'] = $request->file('imagen')->store('uploads', 'public');
        }

        Productos::where('id', $id)->update($datos);
        // Recupera el producto actualizado para obtener su categoria_id
        $producto = Productos::findOrFail($id);

        return redirect()
            ->route('dashboard.categorias.show', $producto->categoria_id)
            ->with('success', 'Producto actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $producto = Productos::findOrFail($id);
        $categoriaId = $producto->categoria_id;

        // Elimina imagen y registro
        if (Storage::delete('public/'.$producto->imagen)) {
            $producto->delete();
        }

        // Redirige al “show” de esa categoría en el dashboard
        return redirect()
            ->route('dashboard.categorias.show', $categoriaId)
            ->with('success', 'Producto eliminado correctamente.');
    }
}
