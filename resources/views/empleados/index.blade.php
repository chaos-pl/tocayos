
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Lista de empleados</h2>

        <a href="{{ route('empleados.create') }}" class="btn btn-success mb-3">+ Nuevo empleado</a>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Foto</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Correo</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($empleados as $empleado)
                <tr>
                    <td>{{ $empleado->id }}</td>
                    <td>
                        <img src="{{ asset('storage/' . $empleado->Foto) }}" width="100" alt="Foto de {{ $empleado->Nombre }}">
                    </td>
                    <td>{{ $empleado->Nombre }}</td>
                    <td>{{ $empleado->ApellidoPaterno }}</td>
                    <td>{{ $empleado->ApellidoMaterno }}</td>
                    <td>{{ $empleado->Correo }}</td>
                    <td>
                        <a href="{{ route('empleados.edit', $empleado->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ url('/empleados/'.$empleado->id) }}" method="post" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('¿Deseas borrar este empleado?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <!-- Paginación -->
        <div class="d-flex justify-content-center">
            {{ $empleados->links() }}
        </div>
    </div>
@endsection

