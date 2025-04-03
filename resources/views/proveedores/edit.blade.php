@extends('layouts.dashboard')

@section('dashboard-content')
    <div class="container">
        <h2>Editar proveedor</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('proveedores.update', $proveedor->id) }}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $proveedor->nombre }}">
            </div>

            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="text" name="telefono" id="telefono" class="form-control" value="{{ $proveedor->telefono }}">
            </div>

            <div class="mb-3">
                <label for="correo" class="form-label">Correo electrónico</label>
                <input type="email" name="correo" id="correo" class="form-control" value="{{ $proveedor->correo }}">
            </div>

            <div class="mb-3">
                <label for="direccion" class="form-label">Dirección</label>
                <input type="text" name="direccion" id="direccion" class="form-control" value="{{ $proveedor->direccion }}">
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="{{ route('proveedores.index') }}" class="btn btn-secondary">Regresar</a>
        </form>
    </div>
@endsection
