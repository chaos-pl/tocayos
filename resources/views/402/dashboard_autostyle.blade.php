@extends('layouts.app')

@section('content')
    <style>
        html, body {
            height: 100%;
            margin: 0;
            background-color: #f8f9fa;
            color: #333;
        }
        .navbar {
            background-color: #FFC107 !important;
        }
        .dashboard-container {
            width: 95%;
            height: 95vh;
            margin: auto;
            background-color: white;
            border-radius: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            overflow: hidden;
            padding: 20px;
        }
        .sidebar {
            width: 250px;
            height: 100%;
            background-color: black;
            color: yellow;
            display: flex;
            flex-direction: column;
            padding: 20px;
            border-radius: 20px 0 0 20px;
        }
        .sidebar a {
            color: yellow;
            text-decoration: none;
            display: block;
            padding: 15px;
            font-weight: bold;
            border-radius: 5px;
        }
        .sidebar a.active, .sidebar a:hover {
            background-color: #333;
            border-left: 5px solid #FFC107;
        }
        .content {
            flex-grow: 1;
            padding: 40px;
            overflow-y: auto;
            background-color: #f1f1f1;
            border-radius: 10px;
        }
        .stats-panel {
            width: 250px;
            height: 100%;
            background-color: black;
            color: white;
            padding: 20px;
            border-radius: 0 20px 20px 0;
        }
        .stats-panel h4 {
            border-bottom: 2px solid #FFC107;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .stats-panel .stat-item {
            margin-bottom: 15px;
            padding: 10px;
            background-color: #FFC107  ;
            border-radius: 5px;
            text-align: center;
        }
        .sidebar .logout {
            margin-top: auto;
        }
    </style>

    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/landing_page">
                <img src="{{ asset('img/logo_autostyle.jpeg') }}" alt="AutoStyle Logo" class="rounded-circle border border-dark me-2" width="60" height="60">
                AutoStyle Accesorios
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse fw-bold" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span><i class="fa-solid fa-user me-2"></i></span>
                            Cuenta
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-solid fa-sign-out-alt me-2"></i>Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="dashboard-container">
        <div class="sidebar">
            <img src="{{ asset('img/logo_autostyle.jpeg') }}" alt="AutoStyle Logo" class="rounded-circle border border-white mb-4" width="80" height="80">
            <a href="/dashboard" class="{{ request()->is('dashboard') ? 'active' : '' }}"><i class="fa-solid fa-home me-2"></i>Inicio</a>
            <a href="/productos" class="{{ request()->is('productos') ? 'active' : '' }}"><i class="fa-solid fa-box me-2"></i>Productos</a>
            <a href="/empleados" class="{{ request()->is('empleados') ? 'active' : '' }}"><i class="fa-solid fa-users me-2"></i>Empleados</a>
            <a href="/proveedores" class="{{ request()->is('proveedores') ? 'active' : '' }}"><i class="fa-solid fa-truck me-2"></i>Proveedores</a>
            <a href="/landing_page" class="logout {{ request()->is('landing_page') ? 'active' : '' }}"><i class="fa-solid fa-arrow-left me-2"></i>Salir</a>
        </div>

        <div class="content">
            <h2 class="fw-bold">Bienvenido al Dashboard</h2>
            <p>Contenido de la vista actual...</p>
        </div>

        <div class="stats-panel">
            <h4>Estadísticas</h4>
            <div class="stat-item">
                <h5>Ventas Totales</h5>
                <p>$75,000</p>
            </div>
            <div class="stat-item">
                <h5>Porcentaje de Almacén</h5>
                <p>65%</p>
            </div>
            <div class="stat-item">
                <h5>Clientes Activos</h5>
                <p>1,230</p>
            </div>
        </div>
    </div>

    <footer class="text-center text-white bg-dark py-3 mt-5">
        <p>&copy; 2025 AutoStyle Accesorios. Todos los derechos reservados.</p>
    </footer>
@endsection

