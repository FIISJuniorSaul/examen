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
                                    AGREGAR NUEVO CLIENTE->EMPRESA
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-body page-body-light pt-3 px-2">
                    <div class="card card-header-actions">
                        <div class="card-header">
                            Datos de la empresa
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
                                            <div class="card-header">Detalles del cliente</div>
                                            <div class="card-body">
                                                <form>
                                                    
                                                    <!-- Form Group (username)-->
                                                    <div class="row gx-3 mb-3">
                                                        <!-- Form Group (first name)-->
                                                        <div class="col-md-6">
                                                            <label class="small mb-1" for="inputNºDERUC">Nº DE RUC</label>
                                                            <input class="form-control" id="inputNºDERUC" type="text"
                                                                placeholder="NºDERUC" value=""  />
                                                        </div>
                                                        <!-- Form Group (last name)-->
                                                        <div class="col-md-6">
                                                            <label class="small mb-1" for="inputTelefóno">Teléfono</label>
                                                            <input class="form-control" id="inputTeléfono" type="text"
                                                                placeholder="Teléfono" value="" />
                                                        </div>
                                                    </div>
                                                    <!-- Form Row-->
                                                    <div class="row gx-3 mb-3">
                                                        <!-- Form Group (first name)-->
                                                        <div class="col-md-6">
                                                            <label class="small mb-1" for="inputRazónSocial">Razón Social</label>
                                                            <input class="form-control" id="inputRazónSocial" type="text"
                                                                placeholder="Razón Social" value=""  />
                                                        </div>
                                                        <!-- Form Group (last name)-->
                                                        <div class="col-md-6">
                                                            <label class="small mb-1" for="inputDirección">Dirección</label>
                                                              
                                                            <input class="form-control" id="inputDirección" type="text"
                                                                placeholder="Dirección" value="" />
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
