@extends('layouts.dashboard')

@section('dashboard-content')
    <h2 class="fw-bold mb-4">Lista de productos</h2>

    <div class="table-responsive shadow-sm rounded">
        <table class="table align-middle table-hover">
            <thead class="table-dark text-center">
            <tr>
                <th>#</th>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Categoria</th>

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
                    <td class="text-bg-danger">{{$producto->categoria_id}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-center mt-4">
        {{ $productos->links() }}
    </div>
@endsection
