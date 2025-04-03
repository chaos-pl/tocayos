<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('402.landing_page_ferreteria');
});
Route::resource('empleados', App\Http\Controllers\EmpleadosController::class);






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
Route::get("landing_page", function()
{
    return view("402.landing_page_ferreteria");
});
Route::get("dash_autostyle", function()
{
    return view("402.dashboard_autostyle");
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
