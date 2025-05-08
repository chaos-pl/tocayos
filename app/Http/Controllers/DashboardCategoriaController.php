<?php

namespace App\Http\Controllers;

use App\Models\DashboardCategoria;
use Illuminate\Http\Request;
use App\Models\Categorias;

class DashboardCategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categorias::orderBy('nombre')->get();
        return view('categorias.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Categorias $categoria)
    {
        $categoria->load('productos');
        return view('categorias.show', compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DashboardCategoria $dashboardCategoria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DashboardCategoria $dashboardCategoria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DashboardCategoria $dashboardCategoria)
    {
        //
    }
}
