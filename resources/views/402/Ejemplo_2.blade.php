@extends('layouts.app')
@section('content')
    <div class="container bg-white">
        <div class="row">
            <div class="col-6 mt-4 pb-0 text-secondary">
                <div class="row border-bottom border-4 border-warning">
                    <div class="col p-4 mt-4">
                        <h1>Imanol Albiter Bartolo</h1>
                        <h2>Ingeniero en Sistemas Computacionales</h2>
                    </div>
                </div>
                <div class="row border-bottom border-4 border-warning">
                    <div class="col p-4 mt-2">
                        <h3>Perfil</h3>
                        <p>ingeniero en proceso</p>
                    </div>
                </div>
            </div>
            <div class="col-6 bg bg-warning mt-4 pb-0">
                <img src="{{asset("img/imanol.jpg")}}" class="rounded-circle  d-block mx-auto w-50" alt="Fotografia">
            </div>
        </div>
        <div class="row">
            <div class="col col-6 border-end border-4 border-warning p-4">
                <h2 class="">Experiencia</h2>
                <div class="row pt-4 p-4">
                    <div class="col">
                        <h4 class="">Docente del TESVB</h4>
                        <ul class="ps-4 ms-4 pt-3 text-secondary">
                            <li>Docente de programacion web</li>
                            <li>Docente de POO</li>
                        </ul>
                    </div>
                </div>
                <div class="row pt-4 p-4">
                    <div class="col">
                        <h4 class="">Manejo tecnico de ChatGPT</h4>
                        <ul class="ps-4 ms-4 pt-3 text-secondary">
                            <li>Manejo tecnico de ChatGPT4.0</li>
                            <li>Manejpo tecnico de ChatGPT2.0</li>
                        </ul>
                    </div>
                </div>
                <div class="row pt-4 p-4">
                    <div class="col">
                        <h4 class="">Desarrollador web</h4>
                        <ul class="ps-4 ms-4 pt-3 text-secondary">
                            <li>Configuracion y despliegue de VPS</li>
                            <li>Diseñador profesional de paginas web</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col col-6 p-4">
                <div class="row pt-4">
                    <h3 class="fw-bold">Educación</h3>
                    <div class="col-6 pt-3">
                        <h4 class="fw-bold">Ingeniero en sistemas computacionales</h4>
                        <h5 class="text-secondary fw-light">TESVB</h5>
                    </div>
                    <div class="col-6 pt-3">
                        <h4 class="fw-bold">Tecnico en programacion</h4>
                        <h5 class="text-secondary fw-light">EPO 131</h5>
                    </div>
                    <div class="col-6 pt-3">
                        <h4 class="fw-bold">Tecnico en linux</h4>
                        <h5 class="text-secondary fw-light">Certidicado de linux essencails</h5>
                    </div>
                    <div class="col-6 pt-3">
                        <h4 class="fw-bold">Tecnico en ciberseguridad</h4>
                        <h5 class="text-secondary fw-light">Certificado cisco ciberseguridad</h5>
                    </div>
                </div>
                <div class="row pt-3">
                    <h3 class="fw-bold">Contacto</h3>
                    <div class="col p-3">
                        <ul>
                            <li><span><i class="fa-solid fa-envelope me-2"></i></span>Email</li>
                            <li><span><i class="fa-solid fa-phone me-2"></i></span>Telefono</li>
                            <li><span><i class="fa-solid fa-house me-2"></i></span>Direccion</li>
                        </ul>
                    </div>
                </div>
                <div class="row pt-3">
                    <h3 class="fw-bold">Intereses</h3>
                    <div class="col p-3">
                        <ul>
                            <li>Comer</li>
                            <li>dormir</li>
                            <li>jugar vidojuegos</li>
                            <li>dormir otra vez</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
