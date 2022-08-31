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
                        <div class="card-body">
                            <img src="..." class="img-thumbnail" alt="...">
                            <form class="d-flex" role="addphotography">
                                <a href="#"> <button type="button" class="btn btn-primary" enable><em
                                            class='bx bxs-camera-plus'></em> Cargar Foto</button></a>

                            </form>
                            <br>
                            <div class="row g-3">
                                <br>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="DNI" aria-label="DNI">
                                    <br>
                                    <form class="d-flex" role="addDNI">
                                        <br>
                                        <a href="#"> <button type="button" class="btn btn-primary" enable><em
                                                    class='bx bx-search-alt'></em> Buscar</button></a>
                                    </form>
                                </div>
                            </div>
                            <br>
                            <form>
                                <div class="row g-3">
                                    <div class="col">
                                        <h5>Dni</h5>
                                        <input readonly type="text" class="form-control" placeholder="DNI"
                                            aria-label="ID">
                                    </div>
                                    <div class="col">
                                        <h5>Apellido Paterno</h5>
                                        <input readonly type="text" class="form-control" placeholder="Apellido Paterno"
                                            aria-label="First nameP">
                                    </div>
                                    <div class="col">
                                        <h5>Apellido Materno</h5>
                                        <input readonly type="text" class="form-control" placeholder="Apellido Materno"
                                            aria-label="First nameM">
                                    </div>
                                    <div class="col">
                                        <h5>Nombres</h5>
                                        <input readonly type="text" class="form-control" placeholder="Nombres"
                                            aria-label="name">
                                    </div>
                                </div>
                            </form>
                            <br>
                            <form>
                                <div class="row g-3 px-6">
                                    <div class="col">
                                        <h5>Teléfono</h5>
                                        <input type="text" class="form-control" placeholder="N° de Teléfono"
                                            aria-label="telephone">
                                    </div>
                                </div>
                            </form>
                            <br>
                            <form>
                                <h2>Datos del usuario</h2>
                                <div class="row g-3 px-6">
                                    <div class="col">
                                        <h5>Correo electronico</h5>
                                        <input type="text" class="form-control" placeholder="exameple@gmail.com"
                                            aria-label="Email">
                                    </div>
                                    <div class="col">
                                        <h5>Contraseña</h5>
                                        <div class="input-group mb-3">
                                            <input type="password" class="form-control" placeholder="**********"
                                                aria-label="Recipient's username" aria-describedby="button-addon2">
                                            <button class="btn btn-outline-secondary" type="button"
                                                id="button-addon2"><em class='bx bx-low-vision'></em> </button>
                                        </div>
                                    </div>
                                </div>
                             
                                <div class="row g-3 px -6">
                                    <div class ="col">
                                    <h5> Estado</h5>
                                    <select class="form-select" aria-label="Default select example">
                                <option selected>active</option>
                                <option value="1">inactivo</option>
                                <option value="2">en proceso</option>
                                </select>

                                    </div>
                                    <div class ="col">
                                    <h5> Roles y Permisos</h5>
                                    <select class="form-select" aria-label="Default select example">
                                <option selected>administrator</option>
                                <option value="1"></option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                                </select>

                                    </div>
                                
                                    <div class="btn">
                                    <button class="btn btn-primary me-md-2" type="button"><i class='bx bxs-user-plus'></i>Registrar</button>
                                    <button class="btn btn-primary" type="button"><i class='bx bxs-left-arrow-square'></i>Atrás</button>
                                    </div>

                          </form>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
