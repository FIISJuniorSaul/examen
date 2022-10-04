@extends('layouts.config')
@section('content')
    @include('admin.header')
    <div id="layoutSidenav">
        @include('admin.sidebar')
        <div id="layoutSidenav_content">
            <main>
                <div class="page-header page-header-dark bg-gradient-primary-to-secondary mt-1">
                    <div class="page-header-content">
                        <div class="row justify-content-center">
                            <div class="col-12 col-xl-auto">
                                <h1 class="page-title">
                                    AGREGAR NUEVO CLIENTE
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-body page-body-light pt-3 px-2">
                    <div class="card card-header-actions">
                        <div class="card-header">
                            Datos del cliente
                        </div>
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                              <a class="nav-link" aria-current="page" href="/admin/operaciones/clientes/crear">Cliente Natural</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link active" href="/admin/operaciones/clientes/crearPersonaNatural">Cliente Juridico</a>
                            </li>
                          </ul>
                        <main>
                            <!-- Main page content-->
                            <div class="container-xl px-4 mt-4">
                                <hr class="mt-0 mb-4" />
                                <div class="row">
                                    <div class="col-xl-8">
                                        <!-- Account details card-->
                                        <div class="card mb-4">
                                            <div class="card-header">Detalles del cliente Natural</div>
                                            <div class="card-body">
                                                <label for="dni">Ingrese DNI</label>
                                                <div class="input-group">
                                                    <input type="number" min="1" max="99999999" id="dni" class="form-control" placeholder="Documento" />&nbsp;
                                                    <button class="btn btn-primary" id="buscardni" align="right" onClick="consultarDni()">Buscar</button>
                                                </div>
                                                <form action="{{route('usuario.store')}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <!--search-->
                                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end py-2 px-4">

                                                        <!--<form class="input-group">
                                                                <input name="busqueda" class="form-control me-md-2"
                                                                    type="search" placeholder="Ingrese DNI" aria-label="Search"
                                                                    autocomplete="off">
                                                                <button class="btn btn-outline-primary btn-sm" type="submit">
                                                                    <em class='bx bx-search-alt'></em>Buscar</button>
                                                            </form>-->
                                                    </div>
                                                    <!-- Form Group (username)-->
                                                    <div class="row gx-3 mb-3">
                                                        <!-- Form Group (DNI)-->
                                                        <div class="col-md-6">
                                                            <label class="small mb-1" for="inputDNI">DNI</label>
                                                            <input class="form-control" name="dni" id="dni_ciudadano"
                                                                type="text" placeholder="DNI" readonly />
                                                        </div>
                                                        <!-- Form Group (name)-->
                                                        <div class="col-md-6">
                                                            <label class="small mb-1" for="inputName">Nombres</label>
                                                            <input class="form-control" name="nombre" id="nombres"
                                                                type="text" placeholder="Nombres" readonly/>
                                                        </div>
                                                    </div>
                                                    <!-- Form Row-->
                                                    <div class="row gx-3 mb-3">
                                                        <!-- Form Group (last name)-->
                                                        <div class="col-md-6">
                                                            <label class="small mb-1" for="inputFirstName">Apellido
                                                                Paterno</label>
                                                            <input class="form-control" name="apellido_paterno"
                                                            id="apellido_paterno" type="text"
                                                                placeholder="Apellido Paterno" readonly />
                                                        </div>
                                                        <!-- Form Group (last name)-->
                                                        <div class="col-md-6">
                                                            <label class="small mb-1" for="inputLastName">Apellido
                                                                Materno</label>
                                                            <input class="form-control" name="apellido_materno"
                                                            id="apellido_materno" type="text"
                                                                placeholder="Apellido Materno" readonly />
                                                        </div>
                                                    </div>
                                                    <div class="row gx-3 mb-3">
                                                        <div class="col-md-6">
                                                            <label class="small mb-1" for="inputEmail">correo electronico</label>
                                                            <input class="form-control" name="correo"
                                                                id="inputEmail" type="text"
                                                                placeholder="example@rayosac.com" />
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="small mb-1" for="inputTelephone">telefono</label>
                                                            <input class="form-control" name="telefono"
                                                                id="inputTelephone" type="text"
                                                                placeholder="9208033951" />
                                                        </div>
                                                    </div>
                                                    <!-- Form Row        -->
                                                    <div class="row gx-3 mb-3">
                                                        <!-- Form Group (organization name)-->
                                                        <div class="col-md-6">

                                                        </div>
                                                        <!-- Form Group (location)-->
                                                        <div class="col-md-6">

                                                        </div>
                                                    </div>
                                                    <!-- Form Group (email address)-->
                                                    <div class="mb-3">
                                                        <label class="small mb-1" for="inputEmailAddress">Correo
                                                            Electronico</label>
                                                        <input class="form-control" id="inputEmailAddress" type="email"
                                                            placeholder="example@rayosac.com" value="" />
                                                    </div>
                                                    <!-- Form Row-->

                                                    <!--estado roles y permisos-->
                                                    <div class="row gx-2 mb-2">
                                                        <!-- select Estate-->
                                                        <div class="col-md-4">
                                                            <label class="small mb-1" for="inputDepartamento">Departamento</label>
                                                            <select class="form-select"
                                                                aria-label="Default select example">
                                                                <option selected>Seleccionar</option>

                                                            </select>
                                                        </div>
                                                        <!-- select roles and permissions-->
                                                        <div class="col-md-4">
                                                            <label class="small mb-1" for="inputProvincia">Provincia</label>
                                                            <select class="form-select"
                                                                aria-label="Default select example">
                                                                <option selected>Seleccionar</option>

                                                            </select>

                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="small mb-1" for="inputDistrito">Distrito</label>
                                                            <select class="form-select"
                                                                aria-label="Default select example">
                                                                <option selected>Seleccionar</option>

                                                            </select>

                                                        </div>

                                                    </div>

                                                    <div class="text-center">
                                                        <!-- Save changes button-->
                                                        <button class="btn btn-primary" type="button"><em
                                                                class='bx bxs-memory-card'></em>Guardar </button>
                                                        <!-- cancel changes button-->
                                                        <button class="btn btn-primary" type="button"><em
                                                                class='bx bxs-x-circle'></em>Cancelar </button>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </main>
                        <footer class="footer-admin mt-auto footer-light">
                            <div class="container-xl px-4">
                                <div class="row">
                                    <div class="col-md-6 small">Copyright © Empresa de Transportes Rayo SAC 2022</div>
                                    <div class="col-md-6 text-md-end small">
                                        <a href="#!">Privacy Policy</a>
                                        ·
                                        <a href="#!">Terms &amp; Conditions</a>
                                    </div>
                                </div>
                            </div>
                        </footer>
                    </div>
                </div>
        </div>
    </div>
@endsection
