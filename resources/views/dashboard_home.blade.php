@extends('layouts.dashboard')

@section('dashboard-content')
    <h2 class="fw-bold mb-4">Bienvenido al Dashboard</h2>

    <div class="row mb-4">
        <!-- Productos -->
        <div class="col-md-4">
            <div class="card text-white bg-primary shadow d-flex align-items-center">
                <div class="card-body">
                    <div class="d-flex align-items-center gap-3">
                        <i class="fa-solid fa-box fa-2x"></i>
                        <div>
                            <h5 class="card-title mb-1">Productos registrados</h5>
                            <h3 class="m-0">{{ $totalProductos }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Empleados -->
        <div class="col-md-4">
            <div class="card text-white bg-success shadow d-flex align-items-center">
                <div class="card-body">
                    <div class="d-flex align-items-center gap-3">
                        <i class="fa-solid fa-users fa-2x"></i>
                        <div>
                            <h5 class="card-title mb-1">Empleados activos</h5>
                            <h3 class="m-0">{{ $totalEmpleados }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Proveedores -->
        <div class="col-md-4">
            <div class="card text-white bg-warning shadow d-flex align-items-center">
                <div class="card-body">
                    <div class="d-flex align-items-center gap-3">
                        <i class="fa-solid fa-truck fa-2x"></i>
                        <div>
                            <h5 class="card-title mb-1">Proveedores registrados</h5>
                            <h3 class="m-0">{{ $totalProveedores }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="text-center mt-5">
        <img src="{{ asset('img/fotodash.jpg') }}" alt="AutoStyle Dashboard" class="img-fluid rounded shadow" style="max-height: 300px;">
        <p class="mt-3 fs-5 fw-semibold text-muted">
            “Impulsando el estilo y rendimiento de tu auto con cada detalle.”
        </p>
    </div>
@endsection

