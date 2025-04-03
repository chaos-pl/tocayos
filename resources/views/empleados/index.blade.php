@extends('layouts.dashboard')

@section('dashboard-content')
    <h2 class="fw-bold mb-4">Lista de empleados</h2>

    <a href="{{ route('empleados.create') }}" class="btn btn-success mb-3">
        <i class="fa-solid fa-plus me-1"></i> Nuevo empleado
    </a>

    <div class="table-responsive shadow-sm rounded">
        <table class="table align-middle table-hover">
            <thead class="table-dark text-center">
            <tr>
                <th>#</th>
                <th>Foto</th>
                <th>Nombre</th>
                <th>Ap. Paterno</th>
                <th>Ap. Materno</th>
                <th>Correo</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody class="text-center">
            @foreach ($empleados as $empleado)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        <img src="{{ asset('storage/' . $empleado->Foto) }}" alt="Foto" class="rounded-circle shadow" width="60" height="60">
                    </td>
                    <td class="fw-bold">{{ $empleado->Nombre }}</td>
                    <td>{{ $empleado->ApellidoPaterno }}</td>
                    <td>{{ $empleado->ApellidoMaterno }}</td>
                    <td>
                        <i class="fa-solid fa-envelope me-1 text-secondary"></i>{{ $empleado->Correo }}
                    </td>
                    <td>
                        <a href="{{ route('empleados.edit', $empleado->id) }}" class="btn btn-sm btn-warning me-1">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <form action="{{ url('/empleados/'.$empleado->id) }}" method="post" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar empleado?')">
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
        {{ $empleados->links() }}
    </div>
@endsection

