<?php

namespace App\Http\Controllers;
use App\Models\Productos;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    //
    public function index()
    {
        $productos = Productos::all(); // o puedes usar paginate
        return view('402.landing_page_ferreteria', compact('productos'));
    }

}
