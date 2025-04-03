
@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row justify-content-center mt-5">
            <div class="col-md-8 text-center">
                <h2 class="titulo-seccion">Sección para crear empleados</h2>
            </div>
        </div>


        <form action="{{ route('empleados.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="Nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="Nombre" name="Nombre" required>
            </div>

            <div class="mb-3">
                <label for="ApellidoPaterno" class="form-label">Apellido Paterno</label>
                <input type="text" class="form-control" id="ApellidoPaterno" name="ApellidoPaterno" required>
            </div>

            <div class="mb-3">
                <label for="ApellidoMaterno" class="form-label">Apellido Materno</label>
                <input type="text" class="form-control" id="ApellidoMaterno" name="ApellidoMaterno" required>
            </div>

            <div class="mb-3">
                <label for="Correo" class="form-label">Correo</label>
                <input type="email" class="form-control" id="Correo" name="Correo" required>
            </div>

            <div class="mb-3">
                <label for="Foto" class="form-label">Foto</label>
                <input type="file" class="form-control" id="Foto" name="Foto" required>
            </div>

            <button type="submit" class="btn btn-primary">Guardar empleado</button>
            <a href="{{ route('empleados.index') }}" class="btn btn-secondary">Regresar</a>





        </form>
    </div>
@endsection

