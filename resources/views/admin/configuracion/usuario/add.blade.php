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
                                    AGREGAR USUARIO
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-body page-body-light pt-3 px-2">
                    <div class="card card-header-actions">
                        <div class="card-header">
                            Datos personales
                        </div>
                        <main>
                            <!-- Main page content-->
                            <div class="container-xl px-4 mt-4">
                                <hr class="mt-0 mb-4" />
                                <div class="row">
                                    <div class="col-xl-4">
                                        <!-- Profile picture card-->
                                        <div class="card mb-4 mb-xl-0">
                                            <div class="card-header">Foto de perfil</div>
                                            <div class="card-body text-center">
                                                <!-- Profile picture image-->
                                                <img src="../image/profileuser.png" class="rounded mx-auto d-block" alt="" width="200" height="200">
                                                <!-- Profile picture help block-->
                                                <div class="small font-italic text-muted mb-4">JPG o PNG de no más de 5 MB
                                                </div>
                                                <!-- Profile picture upload button-->
                                                <button class="btn btn-primary" type="button">Subir fotografia</button>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8">
                                        <!-- Account details card-->
                                        <div class="card mb-4">
                                            <div class="card-header">Detalles de la Cuenta</div>
                                            <div class="card-body">
                                                <form>
                                                    <!--search-->
                                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end py-2 px-4">

                                                        <form class="input-group">
                                                            <input name="busqueda" class="form-control me-md-2"
                                                                type="search" placeholder="Ingrese DNI" aria-label="Search"
                                                                autocomplete="off">
                                                            <button class="btn btn-outline-primary btn-sm" type="submit">
                                                                <em class='bx bx-search-alt'></em>Buscar</button>
                                                        </form>
                                                    </div>
                                                    <!-- Form Group (username)-->
                                                    <div class="row gx-3 mb-3">
                                                        <!-- Form Group (first name)-->
                                                        <div class="col-md-6">
                                                            <label class="small mb-1" for="inputDNI">DNI</label>
                                                            <input class="form-control" id="inputDNI" type="text"
                                                                placeholder="DNI" value="" readonly />
                                                        </div>
                                                        <!-- Form Group (last name)-->
                                                        <div class="col-md-6">
                                                            <label class="small mb-1" for="inputName">Nombres</label>
                                                            <input class="form-control" id="inputName" type="text"
                                                                placeholder="Nombres" value="" readonly />
                                                        </div>
                                                    </div>
                                                    <!-- Form Row-->
                                                    <div class="row gx-3 mb-3">
                                                        <!-- Form Group (first name)-->
                                                        <div class="col-md-6">
                                                            <label class="small mb-1" for="inputFirstName">Apellido
                                                                Paterno</label>
                                                            <input class="form-control" id="inputFirstName" type="text"
                                                                placeholder="Apellido Paterno" value="" readonly />
                                                        </div>
                                                        <!-- Form Group (last name)-->
                                                        <div class="col-md-6">
                                                            <label class="small mb-1" for="inputLastName">Apellido
                                                                Materno</label>
                                                            <input class="form-control" id="inputLastName" type="text"
                                                                placeholder="Apellido Materno" value="" readonly />
                                                        </div>
                                                    </div>
                                                    <!-- Form Row        -->
                                                    <div class="row gx-3 mb-3">
                                                        <!-- Form Group (organization name)-->
                                                        <div class="col-md-6">
                                                            <label class="small mb-1" for="inputDateofBirth">Fecha de
                                                                Nacimiento</label>
                                                            <input class="form-control" id="inputDateofBirth" type="text"
                                                                placeholder="Fecha de Nacimiento" value="" readonly />
                                                        </div>
                                                        <!-- Form Group (location)-->
                                                        <div class="col-md-6">
                                                            <label class="small mb-1" for="inputLocation">Locación</label>
                                                            <input class="form-control" id="inputLocation" type="text"
                                                                placeholder="Locación" value="" readonly />
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
                                                    <div class="row gx-3 mb-3">
                                                        <!-- Form Group (phone number)-->
                                                        <div class="col-md-6">
                                                            <label class="small mb-1" for="inputPhone">Numero de
                                                                Celular</label>
                                                            <input class="form-control" id="inputPhone" type="tel"
                                                                placeholder="928033951" value="" />
                                                        </div>
                                                        <!-- Form Group (birthday)-->
                                                        <div class="col-md-6">
                                                            <label class="small mb-1" for="inputPassword">Contraseña
                                                            </label>
                                                            <div class="input-group">
                                                                <input type="password" class="form-control"
                                                                    id="inputPassword" placeholder="********" required>
                                                                <span type="button"class="input-group-text"
                                                                    id="inputGroupPrepend2"><em
                                                                        class='bx bx-low-vision'></em></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--estado roles y permisos-->
                                                    <div class="row gx-3 mb-3">
                                                        <!-- select Estate-->
                                                        <div class="col-md-6">
                                                            <label class="small mb-1" for="inputState">Estado</label>
                                                            <select class="form-select"
                                                                aria-label="Default select example">
                                                                <option selected>Seleccionar</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>
                                                        </div>
                                                        <!-- select roles and permissions-->
                                                        <div class="col-md-6">
                                                            <label class="small mb-1" for="inputPassword">Roles y
                                                                Permisos</label>
                                                            <select class="form-select"
                                                                aria-label="Default select example">
                                                                <option selected>Seleccionar</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
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
