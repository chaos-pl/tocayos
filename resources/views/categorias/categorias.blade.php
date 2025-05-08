{{-- resources/views/402/categorias.blade.php --}}
@extends('layouts.dashboard')

@section('dashboard-content')
    <div class="d-flex h-100">
        {{-- Segundo Sidebar: Subcategorías --}}
        <div class="sidebar" style="width: 220px; border-radius: 10px 0 0 10px;">
            <h5 class="text-warning mb-4">Categorías</h5>

            <a href="/dashboard/categorias/accesorios"><i class="fa-solid fa-screwdriver-wrench me-2"></i>Accesorios</a>
            <a href="/dashboard/categorias/audio"><i class="fa-solid fa-music me-2"></i>Audio</a>
            <a href="/dashboard/categorias/luces"><i class="fa-solid fa-lightbulb me-2"></i>Luces LED</a>
            <a href="/dashboard/categorias/calcomanias"><i class="fa-solid fa-stamp me-2"></i>Calcomanías</a>
        </div>

        {{-- Espacio para contenido de categoría específica --}}
        <div class="content ms-4 w-100">
            <h3 class="fw-bold">Selecciona una categoría para gestionar productos</h3>
        </div>
    </div>
@endsection
