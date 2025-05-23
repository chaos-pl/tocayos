<?php

namespace App\Http\Controllers;

use App\Models\Empleados;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['empleados'] = Empleados::paginate(5);
        return view('empleados.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('empleados.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'Nombre' => 'required|string|max:100',
            'ApellidoPaterno' => 'required|string|max:100',
            'ApellidoMaterno' => 'required|string|max:100',
            'Correo' => 'required|email|unique:empleados,Correo',
            'Foto' => 'required|image|mimes:jpg,png,jpeg|max:2048'
        ]);

        //$datosEmpleados = request()->all();
        $datosEmpleado=request()->except('_token');
        if($request->hasFile('Foto')){
            $datosEmpleado['Foto']=$request->file('Foto')->store('uploads','public');
        }
        Empleados::insert($datosEmpleado);
        return redirect('empleados')->with('success', 'Empleado agregado correctamente.');
        ///return response()->json($datosEmpleado);
    }

    /**
     * Display the specified resource.
     */
    public function show(Empleados $empleados)
    {
        //
        return redirect()->route($empleados.$this->edit($empleados)->id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $empleado=Empleados::findOrFail($id);
        return view('empleados.edit', compact('empleado'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'Nombre' => 'required|string|max:100',
            'ApellidoPaterno' => 'required|string|max:100',
            'ApellidoMaterno' => 'required|string|max:100',
            'Correo' => "required|email|unique:empleados,Correo,$id",
            'Foto' => 'nullable|image|mimes:jpg,png,jpeg|max:2048'
        ]);

        $datosEmpleado=request()->except(['_token','_method']);

        if($request->hasFile('Foto')){
            $empleado=Empleados::findOrFail($id);
            Storage::delete('public/'.$empleado->Foto);
            $datosEmpleado['Foto']=$request->file('Foto')->store('uploads','public');
        }

        Empleados::where('id','=',$id)->update($datosEmpleado);

        $empleado=Empleados::findOrFail($id);
        return view('empleados.edit', compact('empleado'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $empleado=Empleados::findOrFail($id);

        if (Storage::delete('public/'.$empleado->Foto))
        {
            Empleados::destroy($id);
        }

        return redirect('empleados');

    }
}
