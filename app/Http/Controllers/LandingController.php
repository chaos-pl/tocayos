<?php

namespace App\Http\Controllers;
use App\Models\Productos;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingController extends Controller
{
    //

    public function index()
    {
        $productosPorCategoria = DB::table('productos')
            ->join('categorias','productos.categoria_id','=','categorias.id')
            ->select(
                'productos.id',
                'productos.nombre',
                'productos.descripcion',
                'productos.precio',
                'productos.imagen',
                'categorias.nombre as categoria_nombre'
            )
            ->orderBy('categorias.nombre')
            ->get()
            ->groupBy('categoria_nombre');

        return view('402.landing_page_ferreteria', compact('productosPorCategoria'));
    }


}
