@extends('layouts.app')
@section('content')
<!-- 
    w-75 → Hace que el ancho del contenedor sea el 75% de la pantalla.
    mx-auto → Centra el contenedor horizontalmente.
    min-vh-100 → significa que el elemento ocupará al menos el 100% de la altura visible de la pantalla.
    flex-column → Hace que los elementos dentro del <div> se apilen verticalmente (en columna).
    rounded-4 → Aplica esquinas redondeadas (border-radius) con un valor grande.
    rounded-end-0 → Quita el radio redondeado del lado derecho.
    flex-grow-1 es una clase de Bootstrap que hace que un elemento dentro de un contenedor d-flex crezca y ocupe el espacio disponible en su dirección principal 
    flex-column → Hace que los elementos se apilen en columna en lugar de estar en fila.
    justify-content-center → Centra verticalmente los elementos dentro del contenedor.
    align-items-center → Centra horizontalmente los elementos.
-->
<div class="container-fluid w-75 mx-auto mt-4 bg-white">
    <div class="row min-vh-100">
        <div class="col-2 d-flex flex-column justify-content-center align-items-center rounded-4 rounded-end-0 bg-custom-color">
            <div class="row">
                <div class="col p-4"> 
                    <img src="{{ asset('img/imanol.jpg') }}" class="m-3 w-50 rounded-circle mx-auto d-block border border-2 border-white" alt="..."> 
                </div>
            </div>
                <ul class="list-unstyled fs-5">
                    <li class="fw-bold text-white mb-4"><span><i class="fa-solid fa-user-lock me-2"></i></span>My cloud</li>
                    <li class="fw-bold text-white mb-4"><span><i class="fa-solid fa-users me-2"></i></span>Shared Files</li>
                    <li class="fw-bold text-white mb-4"><span><i class="fa-solid fa-star me-2"></i></span>Favorites</li>
                    <li class="fw-bold text-white mb-4"><span><i class="fa-solid fa-cloud-arrow-up me-2"></i></span>Upload files</li>
                </ul>
            <div class="row mt-auto">
                <ul class="list-unstyled fs-5">
                    <li class="fw-bold text-white mb-4"><span><i class="fa-solid fa-gear me-2"></i></span>Settings</li>
                    <li class="fw-bold text-white mb-4"><span><i class="fa-solid fa-right-to-bracket me-2"></i></span>Log out</li>
                </ul>
            </div>
        </div>
        <div class="col-10 bg-primary-subtle rounded-4 rounded-start-0">
            <div class="row min-vh-100">
                <div class="col-8  p-4">
                    <div class="row">
                        <div class="col bg-white opacity-75 rounded-5 p-2 ms-3">
                            <h5 class="fw-bold text-gray-300 mt-2"><span><i class="fa-solid fa-magnifying-glass ms-2 me-2"></i></span>Search</h5>
                        </div>
                    </div>
                    <div class="row p-3">
                        <div class="row">
                            <p class="fs-4 fw-bold fs-6" style="color: darkblue">Categories</p>
                        </div>
                        <div class="row ms-">
                            <div class="col-2 rounded ms-2 text-white" style="background-color:rgb(111, 0, 255)">
                                <span><i class="fa-solid fa-camera fa-2x mt-2 mb-2"></i></span>
                                <p class="fw-bold fs-6 mb-0">Pictures</p>
                                <p class="fs-7">480 files</p>
                            </div>
                            <div class="col-2 rounded ms-2 text-white" style="background-color: rgb(63, 167, 153)">
                                <span><i class="fa-solid fa-file fa-2x mt-2 mb-2"></i></span>
                                <p class="fw-bold fs-6 mb-0">Documents</p>
                                <p class="fs-7">480 files</p>
                            </div>
                            <div class="col-2 rounded ms-2 text-white" style="background-color: rgb(232, 106, 142)">
                                <span><i class="fa-solid fa-video fa-2x mt-2 mb-2"></i></span>
                                <p class="fw-bold fs-6 mb-0">Videos</p>
                                <p class="fs-7">480 files</p>
                            </div>
                            <div class="col-2 rounded ms-2 text-white" style="background-color: rgb(9, 27, 183)">
                                <span><i class="fa-solid fa-microphone fa-2x mt-2 mb-2"></i></span>
                                <p class="fw-bold fs-6 mb-0">Audio</p>
                                <p class="fs-7">480 files</p>
                            </div>
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="row">
                            <p class="fs-4 fw-bold" style="color: darkblue">Files</p>
                        </div>
                        <div class="row ms-1">
                            <div class="col-2 bg-white  rounded-1">
                                <span><i class="fa-solid fa-briefcase fa-2x mt-2 mb-2"></i></span>
                                <p class="fw-bold fs-6 mb-0">Work</p>
                                <p class="fs-7">480 files</p>
                            </div>
                            <div class="col-2 bg-white ms-2 rounded-1">
                                <span><i class="fa-solid fa-user fa-2x mt-2 mb-2"></i></span>
                                <p class="fw-bold fs-6 mb-0">Personal</p>
                                <p class="fs-7">480 files</p>
                            </div>
                            <div class="col-2 bg-white ms-2 rounded-1">
                                <span><i class="fa-solid fa-graduation-cap fa-2x mt-2 mb-2"></i></span>
                                <p class="fw-bold fs-6 mb-0">School</p>
                                <p class="fs-7">480 files</p>
                            </div>
                            <div class="col-2 bg-white ms-2 rounded-1">
                                <span><i class="fa-solid fa-box-archive fa-2x mt-2 mb-2"></i></span>
                                <p class="fw-bold fs-6 mb-0">Archive</p>
                                <p class="fs-7">480 files</p>
                            </div>
                            <div class="col-2 bg-white ms-2 rounded-1 d-flex justify-content-center align-items-center">
                                <span><i class="fa-solid fa-plus fa-2x"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="row p-3">
                        <div class="row">
                            <p class="fs-4 fw-bold" style="color: darkblue">Recent files</p>
                        </div>
                        <div class="row">
                            <div class="cont ms-3">
                                <div class="row rounded-1 w-100 bg-white mb-3 p-2">
                                    <div class="col">imagen</div>
                                    <div class="col">png</div>
                                    <div class="col">5MB</div>
                                    <div class="col"><span><i class="fa-solid fa-share-nodes"></i></span></div>
                                    <div class="col text-end"><span><i class="fa-solid fa-ellipsis"></i></span></div>
                                </div>
                                <div class="row rounded-1 w-100 bg-white mb-3 p-2">
                                    <div class="col">video</div>
                                    <div class="col">AVI</div>
                                    <div class="col">300MB</div>
                                    <div class="col"><span><i class="fa-solid fa-share-nodes"></i></span></div>
                                    <div class="col text-end"><span><i class="fa-solid fa-ellipsis"></i></span></div>
                                </div>
                                <div class="row rounded-1 w-100 bg-white mb-3 p-2">
                                    <div class="col">audio</div>
                                    <div class="col">MP3</div>
                                    <div class="col">2MB</div>
                                    <div class="col"><span><i class="fa-solid fa-share-nodes"></i></span></div>
                                    <div class="col text-end"><span><i class="fa-solid fa-ellipsis"></i></span></div>
                                </div>
                                <div class="row rounded-1 w-100 bg-white mb-3 p-2">
                                    <div class="col">documento</div>
                                    <div class="col">DOC</div>
                                    <div class="col">700Kb</div>
                                    <div class="col"><span><i class="fa-solid fa-share-nodes"></i></span></div>
                                    <div class="col text-end"><span><i class="fa-solid fa-ellipsis"></i></span></div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-3 d-flex">
                    <div class="bg-white rounded-3 p-3 d-flex flex-column w-100 h-100">
                        <div class="d-flex justify-content-center flex-column align-items-center flex-grow-1 bg-primary-subtle rounded-4 p-3 gap-2">
                            <span><i class="fa-solid fa-upload fa-2x"></i></span>
                            <h4>Add new files</h4>
                        </div>
                        <div class="bg-primary-subtle rounded-4 p-3 mt-2">
                            <h5>Your storage</h5>
                            <p>25% left</p>
                            <p>75 GB of 100 GB are used</p>
                        </div>
                        <div class="bg-primary-subtle rounded-4 p-3 mt-2">
                            <div class="bg-white rounded-1 mb-2 p-2">Keynotes files</div>
                            <div class="bg-white rounded-1 mb-2 p-2">Vacations photos</div>
                            <div class="bg-white rounded-1 p-2">Project report</div>
                            <div class="bg-white rounded-1 mt-2 p-2">+ add more</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection