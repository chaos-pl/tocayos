@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row justify-content-center mt-5">
            <div class="col-md-8 text-center">
                <h2 class="titulo-seccion">Sección para crear productos</h2>
            </div>
        </div>

        <form action="{{ route('productos.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" required></textarea>
            </div>

            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="number" step="0.01" class="form-control" id="precio" name="precio" required>
            </div>

            <div class="mb-3">
                <label for="imagen" class="form-label">Imagen</label>
                <input type="file" class="form-control" id="imagen" name="imagen" required>
            </div>

            <button type="submit" class="btn btn-primary">Guardar producto</button>
            <a href="{{ route('productos.index') }}" class="btn btn-secondary">Regresar</a>
        </form>
    </div>
@endsection


