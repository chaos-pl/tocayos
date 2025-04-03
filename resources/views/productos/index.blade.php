@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Lista de productos</h2>

        <a href="{{ route('productos.create') }}" class="btn btn-success mb-3">+ Nuevo producto</a>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{ $producto->id }}</td>
                    <td>
                        <img src="{{ asset('storage/' . $producto->imagen) }}" width="100" alt="Imagen de {{ $producto->nombre }}">
                    </td>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->descripcion }}</td>
                    <td>${{ number_format($producto->precio, 2) }}</td>
                    <td>
                        <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('¿Deseas borrar este producto?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <!-- Paginación -->
        <div class="d-flex justify-content-center">
            {{ $productos->links() }}
        </div>
    </div>
@endsection
