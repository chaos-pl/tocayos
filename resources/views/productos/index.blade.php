@extends('layouts.dashboard')

@section('dashboard-content')
    <h2 class="fw-bold mb-4">Lista de productos</h2>

    <a href="{{ route('productos.create') }}" class="btn btn-success mb-3">
        <i class="fa-solid fa-plus me-1"></i> Nuevo producto
    </a>

    <div class="table-responsive shadow-sm rounded">
        <table class="table align-middle table-hover">
            <thead class="table-dark text-center">
            <tr>
                <th>#</th>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody class="text-center">
            @foreach ($productos as $producto)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        <img src="{{ asset('storage/' . $producto->imagen) }}"
                             alt="Imagen del producto"
                             class="rounded shadow-sm"
                             style="width: 80px; height: 80px; object-fit: cover;">
                    </td>
                    <td class="fw-bold">{{ $producto->nombre }}</td>
                    <td>{{ $producto->descripcion }}</td>
                    <td class="text-success fw-bold">${{ number_format($producto->precio, 2) }}</td>
                    <td>
                        <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-warning btn-sm me-1">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
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

    <div class="d-flex justify-content-center mt-4">
        {{ $productos->links() }}
    </div>
@endsection
