@extends('layouts.dashboard')

@section('dashboard-content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8 text-center">
                <h2 class="titulo-seccion">Sección para crear productos</h2>
            </div>
        </div>

        {{-- Errores de validación --}}
        @if ($errors->any())
            <div class="alert alert-danger mt-4">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('productos.store') }}" method="POST" enctype="multipart/form-data" class="mt-4">
            @csrf

            {{-- Oculto: si venimos de una categoría, lo preseleccionamos --}}
            <input type="hidden" name="categoria_id" value="{{ old('categoria_id', request('categoria_id')) }}">

            <div class="mb-3">
                <label for="categoria_id" class="form-label">Categoría</label>
                <select name="categoria_id" id="categoria_id" class="form-select" required>
                    <option value="">-- Selecciona una categoría --</option>
                    @foreach($categorias as $cat)
                        <option value="{{ $cat->id }}"
                            {{ $cat->id == old('categoria_id', request('categoria_id')) ? 'selected' : '' }}>
                            {{ $cat->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre"
                       value="{{ old('nombre') }}" required>
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3"
                          required>{{ old('descripcion') }}</textarea>
            </div>

            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="number" step="0.01" class="form-control" id="precio"
                       name="precio" value="{{ old('precio') }}" required>
            </div>

            <div class="mb-3">
                <label for="imagen" class="form-label">Imagen</label>
                <input type="file" class="form-control" id="imagen" name="imagen" required>
            </div>

            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-success">
                    <i class="fa-solid fa-save me-1"></i> Guardar producto
                </button>
                <a href="{{ url()->previous() }}" class="btn btn-secondary">
                    <i class="fa-solid fa-arrow-left me-1"></i> Regresar
                </a>
            </div>
        </form>
    </div>
@endsection




