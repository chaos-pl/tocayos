{{-- resources/views/productos/edit.blade.php --}}
@extends('layouts.dashboard')

@section('dashboard-content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8 text-center">
                <h2 class="titulo-seccion">Editar producto</h2>
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

        <form action="{{ route('productos.update', $producto) }}"
              method="POST"
              enctype="multipart/form-data"
              class="mt-4">
            @csrf @method('PUT')

            {{-- Selección de categoría --}}
            <div class="mb-3">
                <label for="categoria_id" class="form-label">Categoría</label>
                <select name="categoria_id"
                        id="categoria_id"
                        class="form-select @error('categoria_id') is-invalid @enderror"
                        required>
                    <option value="">-- Selecciona una categoría --</option>
                    @foreach($categorias as $cat)
                        <option value="{{ $cat->id }}"
                            {{ $cat->id == old('categoria_id', $producto->categoria_id) ? 'selected' : '' }}>
                            {{ $cat->nombre }}
                        </option>
                    @endforeach
                </select>
                @error('categoria_id')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Nombre --}}
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text"
                       class="form-control @error('nombre') is-invalid @enderror"
                       id="nombre"
                       name="nombre"
                       value="{{ old('nombre', $producto->nombre) }}"
                       required>
                @error('nombre')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Descripción --}}
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea class="form-control @error('descripcion') is-invalid @enderror"
                          id="descripcion"
                          name="descripcion"
                          rows="3"
                          required>{{ old('descripcion', $producto->descripcion) }}</textarea>
                @error('descripcion')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Precio --}}
            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="number"
                       step="0.01"
                       class="form-control @error('precio') is-invalid @enderror"
                       id="precio"
                       name="precio"
                       value="{{ old('precio', $producto->precio) }}"
                       required>
                @error('precio')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Imagen actual --}}
            <div class="mb-3">
                <label class="form-label">Imagen actual</label><br>
                <img src="{{ asset('storage/' . $producto->imagen) }}"
                     width="150" alt="{{ $producto->nombre }}">
            </div>

            {{-- Cambiar imagen --}}
            <div class="mb-3">
                <label for="imagen" class="form-label">Cambiar imagen</label>
                <input type="file"
                       class="form-control @error('imagen') is-invalid @enderror"
                       id="imagen"
                       name="imagen">
                @error('imagen')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Botones --}}
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-warning">
                    <i class="fa-solid fa-save me-1"></i> Actualizar producto
                </button>
                <a href="{{ url()->previous() }}" class="btn btn-secondary">
                    <i class="fa-solid fa-arrow-left me-1"></i> Cancelar
                </a>
            </div>
        </form>
    </div>
@endsection


