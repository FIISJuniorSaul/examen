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
                                    <div class="col-xl-8">
                                        <!-- Account details card-->
                                        <div class="card mb-4">
                                            <div class="card-header">Detalles de la Cuenta</div>
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
                                                    <div class="row gx-3 mb-3">
                                                        <div class="col-md-6">
                                                            <label class="small mb-1" for="inputRol">Rol</label>
                                                            <select id="id_role" name="idrol" class="form-control">
                                                                <option>------Seleccionar------</option>
                                                                @foreach($roles as $role)
                                                                <option value="{{ $role->id }}">{{ $role->nombre }}</option>
                                                                @endforeach
                                                         </select>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="small mb-1" for="inputPassword">Contraseña</label>
                                                            <input class="form-control" name="password"
                                                                id="inputPassword" type="password"
                                                                placeholder="***********" />
                                                        </div>
                                                    </div>
                                                    <div class="row gx-3 mb-3">
                                                        <div class="col-md-6">
                                                            <label class="small mb-1" for="inputUser">Usuario</label>
                                                            <input class="form-control" name="usuario"
                                                                id="inputUser" type="text"
                                                                placeholder="user" />
                                                        </div>
                                                    </div>
                                            </div>

                                            <div class="text-center">
                                                <!-- Save changes button-->
                                                <button href= "/admin/configuracion/usuario/index"class="btn btn-primary" type="submit"><em
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
