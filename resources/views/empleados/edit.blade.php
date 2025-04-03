@extends('layouts.dashboard')

@section('dashboard-content')
    <div class="container">
        <h2>Editar empleado</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('empleados.update', $empleado->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="Nombre" class="form-label">Nombre</label>
                <input type="text" name="Nombre" id="Nombre" class="form-control" value="{{ $empleado->Nombre }}">
            </div>

            <div class="mb-3">
                <label for="ApellidoPaterno" class="form-label">Apellido Paterno</label>
                <input type="text" name="ApellidoPaterno" id="ApellidoPaterno" class="form-control" value="{{ $empleado->ApellidoPaterno }}">
            </div>

            <div class="mb-3">
                <label for="ApellidoMaterno" class="form-label">Apellido Materno</label>
                <input type="text" name="ApellidoMaterno" id="ApellidoMaterno" class="form-control" value="{{ $empleado->ApellidoMaterno }}">
            </div>

            <div class="mb-3">
                <label for="Correo" class="form-label">Correo</label>
                <input type="email" name="Correo" id="Correo" class="form-control" value="{{ $empleado->Correo }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Foto actual</label><br>
                <img src="{{ asset('storage/' . $empleado->Foto) }}" width="200" height="100" alt="Foto de {{ $empleado->Nombre }}">
            </div>

            <div class="mb-3">
                <label for="Foto" class="form-label">Cambiar foto</label>
                <input type="file" name="Foto" id="Foto" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="{{ route('empleados.index') }}" class="btn btn-secondary">Regresar</a>
        </form>
    </div>
@endsection
