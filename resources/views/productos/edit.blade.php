@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Editar producto</h2>

        <form action="{{ route('productos.update', $producto->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $producto->nombre }}" required>
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea name="descripcion" id="descripcion" class="form-control" required>{{ $producto->descripcion }}</textarea>
            </div>

            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="number" step="0.01" name="precio" id="precio" class="form-control" value="{{ $producto->precio }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Imagen actual</label><br>
                <img src="{{ asset('storage/' . $producto->imagen) }}" width="200" height="120" alt="Imagen del producto">
            </div>

            <div class="mb-3">
                <label for="imagen" class="form-label">Cambiar imagen</label>
                <input type="file" name="imagen" id="imagen" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="{{ route('productos.index') }}" class="btn btn-secondary">Regresar</a>
        </form>
    </div>
@endsection


