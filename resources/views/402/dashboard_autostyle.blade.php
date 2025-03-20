@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #f8f9fa;
        color: #333;
    }
    .navbar {
        background-color: #FFC107 !important;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold me" href="/landing_page"> 
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

<div class="container-fluid w-75 mx-auto mt-4 bg-white">
    <div class="row min-vh-100">
        <div class="col-2 d-flex flex-column justify-content-center align-items-center rounded-4 rounded-end-0 bg-black " style="color: yellow">
            <div class="row">
                <div class="col p-4"> 
                    <img src="{{ asset('img/logo_autostyle.jpeg') }}" alt="AutoStyle Logo" class="rounded-circle border border-white me-2" width="80" height="80"> 
                </div>
            </div>
                <ul class="list-unstyled fs-5">
                    <li class="fw-bold mb-4"><span><i class="fa-solid fa-home me-2"></i></span>Inicio</li>
                    <li class="fw-bold mb-4"><span><i class="fa-solid fa-chart-pie me-2"></i></span>Reportes</li>
                    <li class="fw-bold mb-4"><span><i class="fa-solid fa-circle-info me-2"></i></span>Servicios</li>
                    <li class="fw-bold mb-4"><span><i class="fa-solid fa-star me-2"></i></span>Favoritos</li>
                </ul>
            <div class="row mt-auto">
                <ul class="list-unstyled fs-5">
                    <li class="fw-bold mb-4"><span><i class="fa-solid fa-gear me-2"></i></span>Settings</li>
                    <li class="fw-bold mb-4"><span><i class="fa-solid fa-right-to-bracket me-2"></i></span>Log out</li>
                </ul>
            </div>
        </div>
        <div class="col-10 bg-pr bg-custom-color-b rounded-4 rounded-start-0">
            <div class="row min-vh-100">
                <div class="col-12  p-4">
                    <div class="row">
                        <div class="col bg-white opacity-75 rounded-5 p-2 ms-3">
                            <h5 class="fw-bold text-gray-300 mt-2"><span><i class="fa-solid fa-magnifying-glass ms-2 me-2"></i></span>Search</h5>
                        </div>
                    </div>
                    <div class="row p-3">
                        <div class="row text-center">
                            <p class="fs-4 fw-bold fs-6 text-black">Analisis de ventas</p>
                        </div>
                        <div class="row ms-">
                            <div class="col d-flex flex-column justify-content-center align-items-center text-center rounded ms-2 bg-black" style="color: yellow">
                                <span><i class="fa-solid fa-dollar-sign fa-2x p-3"></i></span>
                                <p class="fw-bold fs-6 mb-0">Ventas</p>
                                <p class="fs-7">7,697.00</p>
                            </div>
                            <div class="col rounded ms-2 d-flex flex-column justify-content-center align-items-center bg-black" style="color: yellow">
                                <span><i class="fa-solid fa-cart-shopping fa-2x p-3"></i></span>
                                <p class="fw-bold fs-6 mb-0">Compras</p>
                                <p class="fs-7">480 files</p>
                            </div>
                            <div class="col rounded ms-2 d-flex flex-column justify-content-center align-items-center bg-black" style="color: yellow">
                                <span><i class="fa-solid fa-chart-line fa-2x p-3"></i></span>
                                <p class="fw-bold fs-6 mb-0">Ganancias</p>
                                <p class="fs-7">480 files</p>
                            </div>
                        </div>
                    </div>
                    <div class="row p-2 text-center">
                        <div class="row">
                            <p class="fs-4 fw-bold text-black">Estadisticas</p>
                        </div>
                        <div class="row gap-3">
                            <div class="col bg-white h-100 rounded-1 d-flex flex-column justify-content-center align-items-center h-100">
                                <h4 class="fw-bold">Ventas</h4>
                                <img src="{{ asset('img/ventas.png') }}" class="m-3 mx-auto d-block" alt="..." width="500" height="400"> 
                            </div>
                            <div class="col bg-white ms-2 rounded-1 d-flex flex-column justify-content-center align-items-center h-100">
                                <h4 class="fw-bold">Ganancias</h4>
                                <img src="{{ asset('img/ganancias.jpg') }}" class="m-3 mx-auto d-block" alt="..." width="300" height="400"> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="text-center text-white bg-dark py-3 mt-5">
    <p>&copy; 2025 AutoStyle Accesorios. Todos los derechos reservados.</p>
</footer>
@endsection

