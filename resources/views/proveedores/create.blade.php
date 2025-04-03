@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Crear proveedor</h2>

        <form action="{{ route('proveedores.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="text" name="telefono" id="telefono" class="form-control">
            </div>

            <div class="mb-3">
                <label for="correo" class="form-label">Correo electrónico</label>
                <input type="email" name="correo" id="correo" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="direccion" class="form-label">Dirección</label>
                <input type="text" name="direccion" id="direccion" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Guardar proveedor</button>
            <a href="{{ route('proveedores.index') }}" class="btn btn-secondary">Regresar</a>
        </form>
    </div>
@endsection
