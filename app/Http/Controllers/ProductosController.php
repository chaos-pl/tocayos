<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;
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
        return view('productos.index', $datos);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datosProducto = request()->except('_token');

        if ($request->hasFile('imagen')) {
            $datosProducto['imagen'] = $request->file('imagen')->store('uploads', 'public');
        }

        Productos::insert($datosProducto);

        return redirect()->route('productos.index')->with('success', 'Producto agregado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Productos $productos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $producto = Productos::findOrFail($id);
        return view('productos.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        //
        $datosProducto = request()->except(['_token', '_method']);

        if ($request->hasFile('imagen')) {
            $producto = Productos::findOrFail($id);
            Storage::delete('public/' . $producto->imagen);
            $datosProducto['imagen'] = $request->file('imagen')->store('uploads', 'public');
        }

        Productos::where('id', '=', $id)->update($datosProducto);

        $producto = Productos::findOrFail($id);
        return view('productos.edit', compact('producto'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $producto = Productos::findOrFail($id);

        if (Storage::delete('public/' . $producto->imagen)) {
            Productos::destroy($id);
        }

        return redirect('productos');
    }
}
