<?php

use Illuminate\Support\Facades\Route;


Route::resource('empleados', App\Http\Controllers\EmpleadosController::class);
Route::resource('productos', App\Http\Controllers\ProductosController::class);

Route::resource('proveedores', App\Http\Controllers\ProveedorController::class);

Route::view('/dashboard/categorias', 'categorias.categorias');


use App\Http\Controllers\DashboardCategoriaController;

Route::middleware(['auth'])->prefix('dashboard')->group(function () {
    // Dashboard principal
    Route::view('/', '402.dashboard_autostyle')->name('dashboard');

    // Índice de categorías
    Route::get('categorias', [DashboardCategoriaController::class, 'index'])
        ->name('dashboard.categorias');

    // Mostrar productos de una categoría
    Route::get('categorias/{categoria}', [DashboardCategoriaController::class, 'show'])
        ->name('dashboard.categorias.show');
});



Route::get('/landing_page_ferreteria', [LandingController::class, 'landing']);


Route::get("Ejemplo_1", function()
{
    return view("402.Ejemplo_1");
});
Route::get("ejemplo_2", function()
{
    return view("402.Ejemplo_2");
});
Route::get("ejemplo_3",function()
{
    return view("402.ejemplo_3");
});
Route::get("dashboard", function()
{
    return view("402.dashboard");
});
Route::get("prueba", function()
{
    return view("402.prueba_dash");
});

Route::get("dash_autostyle", function()
{
    return view("402.dashboard_autostyle");
});

use App\Http\Controllers\LandingController;

Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::get('/landing_page', [LandingController::class, 'index']);



Auth::routes();
use App\Http\Controllers\HomeController;

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
