@extends('layouts.dashboard')

@section('dashboard-content')
    <div class="p-4">
        {{-- Título + botón para agregar producto --}}
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-bold">{{ $categoria->nombre }}</h3>
            <a href="{{ route('productos.create', ['categoria_id' => $categoria->id]) }}"
               class="btn btn-sm btn-success">
                <i class="fa-solid fa-plus me-1"></i> Agregar producto
            </a>
        </div>

        {{-- Tabla de productos --}}
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Imagen</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categoria->productos as $producto)
                    <tr>
                        <td>{{ $producto->id }}</td>
                        <td>{{ $producto->nombre }}</td>
                        <td class="text-success fw-bold">${{ number_format($producto->precio, 2) }}</td>
                        <td>
                            <img src="{{ asset('storage/' . $producto->imagen) }}"
                                 width="80" alt="{{ $producto->nombre }}">
                        </td>
                        <td>
                            <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-warning btn-sm me-1">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>

                            <form action="{{ route('productos.destroy', $producto) }}"
                                  method="post" class="d-inline">
                                @csrf @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar producto?')">
                                    <i class="fa-solid fa-trash"></i>
                                </button>

                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection


