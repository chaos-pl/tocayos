@php($noPadding = true)
@extends('layouts.app')

@section('content')
    <style>
        body {
            background-color: #f8f9fa;
            color: #333;
        }
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/img/hero_img_tsuru.jpg');
            background-size: cover;
            background-position: center;
            height: 60vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }
        .btn-custom {
            background-color: #000;
            color: #FFC107;
            border: none;
        }
        .btn-custom:hover {
            background-color: #333;
        }
        .card-img-top {
            width: 300px;
            height: 250px;
            object-fit: cover;
            display: block;
            margin: auto;
        }
    </style>


    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm" style="background-color: #00060a;">
        <div class="container">
            <!-- Ya no hay logo ni nombre -->

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse fw-bold" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fa-solid fa-house me-2"></i>Inicio
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#productos">
                            <i class="fa-solid fa-cart-shopping me-2"></i>Productos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacto">
                            <i class="fa-solid fa-comment me-2"></i>Contacto
                        </a>
                    </li>

                    <!-- Dropdown Marca -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="marcaDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-filter me-2"></i>Filtrar por Marca
                        </a>
                        <ul class="dropdown-menu" id="marca-list">
                            <li><a class="dropdown-item" href="#" data-marca="Toyota">Toyota</a></li>
                            <li><a class="dropdown-item" href="#" data-marca="Ford">Ford</a></li>
                            <li><a class="dropdown-item" href="#" data-marca="Chevrolet">Chevrolet</a></li>
                            <li><a class="dropdown-item" href="#" data-marca="Nissan">Nissan</a></li>
                            <li><a class="dropdown-item" href="#" data-marca="Honda">Honda</a></li>
                        </ul>
                    </li>

                    <!-- Dropdown Modelo -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="modeloDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-filter me-2"></i>Filtrar por Modelo
                        </a>
                        <ul class="dropdown-menu" id="modelo-list">
                            <li><a class="dropdown-item" href="#">Seleccione una marca primero</a></li>
                        </ul>
                    </li>
                </ul>

                <!-- Barra de búsqueda en lugar de Cuenta -->
                <form class="d-flex ms-auto" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar productos..." aria-label="Buscar">
                    <button class="btn btn-outline-warning" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>

    <section class="hero">
        <div>
            <h1>Los Mejores Accesorios para tu Auto</h1>
            <p>Encuentra los mejores accesorios personalizados.</p>
            <a href="#productos" class="btn btn-custom btn-lg">Ver Productos</a>
        </div>
    </section>

    <section id="productos" class="container my-5">
        <h2 class="text-center text-warning fw-bold">Catálogo de Productos</h2>
        <div class="row">
            @foreach ($productos as $producto)
                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow-sm">
                        <img src="{{ asset('storage/' . $producto->imagen) }}" class="card-img-top" alt="{{ $producto->nombre }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $producto->nombre }}</h5>
                            <p class="card-text">{{ $producto->descripcion }}</p>
                            <p class="text-warning"><strong>${{ number_format($producto->precio, 2) }} MXN</strong></p>
                            <a href="#" class="btn btn-custom">Ver más</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>


    <section id="contacto" class="container my-5">
        <h2 class="text-center text-warning fw-bold">Contacto</h2>
        <form>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
                <label for="mensaje" class="form-label">Mensaje</label>
                <textarea class="form-control" id="mensaje" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-custom">Enviar</button>
        </form>
    </section>

    <footer class="text-center text-white bg-dark py-3">
        <p>&copy; 2025 AutoStyle Accesorios. Todos los derechos reservados.</p>
        <div>
            <a href="#" class="text-warning me-3">Facebook</a>
            <a href="#" class="text-warning me-3">Instagram</a>
            <a href="#" class="text-warning">Twitter</a>
        </div>
    </footer>
@endsection

