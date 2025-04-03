@extends('layouts.dashboard')

@section('dashboard-content')
    <h2 class="fw-bold mb-4">Lista de proveedores</h2>

    <a href="{{ route('proveedores.create') }}" class="btn btn-success mb-3">
        <i class="fa-solid fa-plus me-1"></i> Nuevo proveedor
    </a>

    <div class="table-responsive shadow-sm rounded">
        <table class="table table-striped table-hover align-middle">
            <thead class="table-dark text-center">
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Correo</th>
                <th>Dirección</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody class="text-center">
            @foreach ($proveedores as $proveedor)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td class="fw-bold">{{ $proveedor->nombre }}</td>
                    <td>{{ $proveedor->telefono }}</td>
                    <td>{{ $proveedor->correo }}</td>
                    <td>{{ $proveedor->direccion }}</td>
                    <td>
                        <a href="{{ route('proveedores.edit', $proveedor->id) }}" class="btn btn-warning btn-sm me-1">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <form action="{{ route('proveedores.destroy', $proveedor->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('¿Deseas borrar este proveedor?')">
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
        {{ $proveedores->links() }}
    </div>
@endsection
