<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos['proveedores'] = Proveedor::paginate(5);
        return view('proveedores.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('proveedores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'telefono' => 'required|string|max:20',
            'correo' => 'required|email|unique:proveedores,correo',
            'direccion' => 'required|string|max:255'
        ]);

        $datosProveedor = request()->except('_token');
        Proveedor::insert($datosProveedor);

        return redirect('proveedores')->with('success', 'Proveedor creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $proveedor = Proveedor::findOrFail($id);
        return view('proveedores.show', compact('proveedor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $proveedor = Proveedor::findOrFail($id);
        return view('proveedores.edit', compact('proveedor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'telefono' => 'required|string|max:20',
            'correo' => "required|email|unique:proveedors,correo,$id",
            'direccion' => 'required|string|max:255'
        ]);

        $datosProveedor = request()->except(['_token', '_method']);
        Proveedor::where('id', '=', $id)->update($datosProveedor);

        $proveedor = Proveedor::findOrFail($id);
        return view('proveedores.edit', compact('proveedor'))->with('success', 'Proveedor actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Proveedor::destroy($id);
        return redirect('proveedores')->with('success', 'Proveedor eliminado');
    }
}
