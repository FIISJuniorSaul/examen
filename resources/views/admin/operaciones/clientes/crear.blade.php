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
                                <a class="nav-link active" aria-current="page"
                                    href="/admin/operaciones/clientes/crear">Cliente Juridico</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/admin/operaciones/clientes/crearPersonaNatural">Cliente
                                    Natural</a>
                            </li>
                        </ul>
                        <main>
                            <!-- Main page content-->
                            <div class="container-xl px-4 mt-4">
                                <hr class="mt-0 mb-4" />
                                <div class="row">
                                    <div class="#">
                                        <!-- Account details card-->
                                        <div class="card mb-4">
                                            <div class="card-header">Detalles del cliente Jurídico</div>
                                            <div class="card-body">
                                                <label for="dni">Ingrese RUC</label>
                                                <div class="input-group">
                                                    <input type="number" min="1" max="99999999999" id="ruc"
                                                        name="ruc" value="" class="form-control"
                                                        placeholder="N° DE RUC" />&nbsp;
                                                    <button class="btn btn-primary" id="btnbuscar"
                                                        align="right"><em class='bx bx-search-alt-2'></em>Buscar</button>

                                                </div>
                                                <div class="col-md-5">
                                                    <small id="mensaje" style="color: red;display: none;font-size: 12pt;">
                                                        <i class="fa fa-remove"></i> El número de RUC no es valido.
                                                    </small>
                                                </div>
                                                <form action="{{ route('clientes.store') }}" method="post"
                                                    enctype="multipart/form-data">
                                                    @csrf

                                                    <!-- Form Group (username)-->
                                                    <div class="row gx-3 mb-3">
                                                        <!-- Form Group (first name)-->
                                                        <div class="col-md-6">
                                                            <label class="small mb-1" for="inputNºDERUC">Nº DE RUC</label>
                                                            <input class="form-control" id="txtruc" type="text"
                                                                placeholder="Nº DE RUC" value="" readonly />
                                                        </div>
                                                        <!-- Form Group (last name)-->

                                                        <div class="col-md-6">
                                                            <label class="small mb-1" for="inputRazónSocial">Razón
                                                                Social</label>
                                                            <input class="form-control" id="txtrazon" type="text"
                                                                placeholder="Razón Social" value="" readonly />
                                                        </div>

                                                    </div>
                                                    <!-- Form Row-->
                                                    <div class="row gx-3 mb-3">
                                                        <!-- Form Group (first name)-->
                                                        <div class="col-md-6">
                                                            <label class="small mb-1" for="inputNameEmpresa">Estado</label>
                                                            <input class="form-control" id="txtgrupo" type="text"
                                                                placeholder="Estado" value="" readonly />
                                                        </div>
                                                        <!-- Form Group (last name)-->
                                                        <div class="col-md-6">
                                                            <label class="small mb-1" for="inputDirección">Dirección</label>

                                                            <input class="form-control" id="txtdireccion" type="text"
                                                                placeholder="Dirección" value="" readonly />
                                                        </div>
                                                    </div>
                                                    <!-- Form Row-->
                                                    <div class="row gx-3 mb-3">
                                                        <!-- Form Group (first name)-->
                                                        <div class="col-md-4">
                                                            <label class="small mb-1"
                                                                for="inputNameEmpresa">Departamento</label>
                                                            <input class="form-control" id="txtdepartamento" type="text"
                                                                placeholder="departamento" value="" readonly />
                                                        </div>

                                                        <div class="col-md-4">
                                                            <label class="small mb-1" for="inputDirección">Provincia</label>

                                                            <input class="form-control" id="txtprovincia" type="text"
                                                                placeholder="provincia" value="" readonly />
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="small mb-1"
                                                                for="inputNameEmpresa">Distrito</label>
                                                            <input class="form-control" id="txtdistrito" type="text"
                                                                placeholder="distrito" value="" readonly />
                                                        </div>
                                                    </div>

                                                    <!-- Form Row-->
                                                    <div class="row gx-3 mb-3">
                                                        <!-- Form Group (first name)-->

                                                        <div class="col-md-6">
                                                            <label class="small mb-1" for="inputEmailAddress">Correo
                                                                Electrónico</label>
                                                            <input class="form-control" id="inputEmailAddress"
                                                                type="email" placeholder="example@rayosac.com"
                                                                value="" />
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="small mb-1" for="inputTelephone">Número de teléfono</label>
                                                            <input class="form-control" id="inputTelephone"
                                                                type="number" placeholder="928033951"
                                                                value="" />
                                                        </div>
                                                    </div>

                                                    <!-- Form Row-->
                                                    <div>
                                                        <h5>DETALLES DE LA CARGA</h5>
                                                        <h6>Punto de origen</h6>
                                                        <!--estado roles y permisos-->
                                                        <div class="row gx-2 mb-2">
                                                            <!-- select Estate-->
                                                            <div class="col-md-4">
                                                                <label class="small mb-1"
                                                                    for="inputDepartament">Departamento</label>
                                                                <select aria-label="Default select example"
                                                                    class="form-select" id="id_Departament"
                                                                    name="idDepartament" class="form-control">
                                                                    <option>------Seleccionar------</option>

                                                                </select>
                                                            </div>
                                                            <!-- select roles and permissions-->
                                                            <div class="col-md-4">
                                                                <label class="small mb-1"
                                                                    for="inputProvince">Provincia</label>
                                                                <select aria-label="Default select example"
                                                                    class="form-select" id="id_Province"
                                                                    name="idProvince" class="form-control">
                                                                    <option>------Seleccionar------</option>

                                                                </select>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label class="small mb-1"
                                                                    for="inputDistrit">Distrito</label>
                                                                <select aria-label="Default select example"
                                                                    class="form-select" id="id_Distrit" name="idDistrit"
                                                                    class="form-control">
                                                                    <option>------Seleccionar------</option>

                                                                </select>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div>
                                                        <h6>Punto de Destino</h6>
                                                        <!--estado roles y permisos-->
                                                        <div class="row gx-2 mb-2">
                                                            <!-- select Estate-->
                                                            <div class="col-md-4">
                                                                <label class="small mb-1"
                                                                    for="inputDepartament">Departamento</label>
                                                                <select aria-label="Default select example"
                                                                    class="form-select" id="id_Departament"
                                                                    name="idDepartament" class="form-control">
                                                                    <option>------Seleccionar------</option>

                                                                </select>
                                                            </div>
                                                            <!-- select roles and permissions-->
                                                            <div class="col-md-4">
                                                                <label class="small mb-1"
                                                                    for="inputProvince">Provincia</label>
                                                                <select aria-label="Default select example"
                                                                    class="form-select" id="id_Province"
                                                                    name="idProvince" class="form-control">
                                                                    <option>------Seleccionar------</option>

                                                                </select>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label class="small mb-1"
                                                                    for="inputDistrit">Distrito</label>
                                                                <select aria-label="Default select example"
                                                                    class="form-select" id="id_Distrit" name="idDistrit"
                                                                    class="form-control">
                                                                    <option>------Seleccionar------</option>

                                                                </select>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <h6>Detalles Adicionales de la Carga</h6>
                                                    <div class="row gx-3 mb-3">
                                                        <div class="col-md-6">
                                                            <label class="small mb-1" for="inputDetailsBurden">Descripcion de la
                                                                carga</label>
                                                            <input class="form-control" id="inputDetailsBurden"
                                                                type="text" placeholder="Detalles de la carga"
                                                                value="" />
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="small mb-1" for="inputCostBurden">costo de la carga</label>
                                                            <input class="form-control" id="inputCostBurden"
                                                                type="number" placeholder="Costo de la carga"
                                                                value="" />
                                                        </div>
                                                    </div>

                                                    <div class="text-center">
                                                        <br>
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
