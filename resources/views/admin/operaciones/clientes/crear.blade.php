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
                              <a class="nav-link active" aria-current="page" href="/admin/operaciones/clientes/crear">Cliente Juridico</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="/admin/operaciones/clientes/crearPersonaNatural">Cliente Natural</a>
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
                                            <div class="card-header">Detalles del cliente Juridico</div>
                                            <div class="card-body">
                                                <label for="dni">Ingrese RUC</label>
                                                <div class="input-group">
                                                    <input type="number" min="1" max="99999999999" id="ruc" class="form-control" placeholder="N° DE RUC" />&nbsp;
                                                    <button class="btn btn-primary" id="buscarruc" align="right" onClick="consultarRuc()">Buscar</button>
                                                </div>
                                                <form>
                                                    <!-- Form Group (username)-->
                                                    <div class="row gx-3 mb-3">
                                                        <!-- Form Group (first name)-->
                                                        <div class="col-md-6">
                                                            <label class="small mb-1" for="inputNºDERUC">Nº DE RUC</label>
                                                            <input class="form-control" id="inputNºDERUC" type="text"
                                                                placeholder="NºDERUC" value=""  readonly/>
                                                        </div>
                                                        <!-- Form Group (last name)-->

                                                        <div class="col-md-6">
                                                            <label class="small mb-1" for="inputRazónSocial">Razón Social</label>
                                                            <input class="form-control" id="inputRazónSocial" type="text"
                                                                placeholder="Razón Social" value=""  readonly/>
                                                        </div>

                                                    </div>
                                                    <!-- Form Row-->
                                                    <div class="row gx-3 mb-3">
                                                        <!-- Form Group (first name)-->
                                                        <div class="col-md-6">
                                                            <label class="small mb-1" for="inputNameEmpresa">Nombre de la empresa</label>
                                                            <input class="form-control" id="inputNameEmpresa" type="text"
                                                                placeholder="nombre comercial de la empresa" value="" readonly />
                                                        </div>
                                                        <!-- Form Group (last name)-->
                                                        <div class="col-md-6">
                                                            <label class="small mb-1" for="inputDirección">Dirección</label>

                                                            <input class="form-control" id="inputDirección" type="text"
                                                                placeholder="Dirección" value="" readonly />
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
                                                    <div>
                                                        <h6>DETALLES DE LA RUTA</h6>
                                                        <a>Punto de origen</a>
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
                                                    </div>
                                                    <div>
                                                        <a>Punto de destino</a>
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
                                                    </div>
                                                    <h6>DETALLES DE LA CARGA</h6>
                                                    <div class="col-md-4">
                                                        <label class="small mb-1" for="inputDistrito">Descripcion de la carga</label>
                                                        <input class="form-control" id="inputDetailsBurden" type="text"
                                                            placeholder="detalles de la carga" value="" />
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
