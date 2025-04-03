<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalProductos = \App\Models\Productos::count();
        $totalEmpleados = \App\Models\Empleados::count();
        $totalProveedores = \App\Models\Proveedor::count();

        return view('dashboard_home', compact(
            'totalProductos',
            'totalEmpleados',
            'totalProveedores'
        ));
    }

}
