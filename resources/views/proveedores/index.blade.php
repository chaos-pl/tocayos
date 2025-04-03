@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Lista de proveedores</h2>

        <a href="{{ route('proveedores.create') }}" class="btn btn-success mb-3">+ Nuevo proveedor</a>

        <table class="table table-bordered">
            <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Correo</th>
                <th>Dirección</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($proveedores as $proveedor)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $proveedor->nombre }}</td>
                    <td>{{ $proveedor->telefono }}</td>
                    <td>{{ $proveedor->correo }}</td>
                    <td>{{ $proveedor->direccion }}</td>
                    <td>
                        <a href="{{ route('proveedores.edit', $proveedor->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('proveedores.destroy', $proveedor->id) }}" method="POST" class="d-inline"
                            @csrf
                            @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('¿Deseas borrar este Proveedor?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
