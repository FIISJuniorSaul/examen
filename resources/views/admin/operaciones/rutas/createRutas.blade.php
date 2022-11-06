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
                                    RUTAS
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-body page-body-light pt-3 px-2">
                    <div class="card card-header-actions">
                        <div class="card-header">
                            Datos de la Ruta
                        </div>
                        <div class="card-body">
                            <br>
                            <form action="{{route('rutasdestino.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row g-3 px-6">
                                    <div>
                                        <h5>DETALLES DE LA RUTA</h5>
                                        <h6>Punto de origen</h6>
                                        <!--estado roles y permisos-->
                                        <div class="row gx-2 mb-2">
                                            <!-- select Estate-->
                                            <div class="col-md-4">
                                                <label class="small mb-1"
                                                    for="inputDepartament">Departamento</label>
                                                <select class="form-control state"></select>
                                            </div>
                                            <!-- select roles and permissions-->
                                            <div class="col-md-4">
                                                <label class="small mb-1"
                                                    for="inputProvince">Provincia</label>
                                                    <select class="form-control city"></select>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="small mb-1"
                                                    for="inputDistrit">Distrito</label>
                                                    <select class="form-control district"></select>
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
                                                    <select class="form-control state"></select>
                                            </div>
                                            <!-- select roles and permissions-->
                                            <div class="col-md-4">
                                                <label class="small mb-1"
                                                    for="inputProvince">Provincia</label>
                                                    <select class="form-control city"></select>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="small mb-1"
                                                    for="inputDistrit">Distrito</label>
                                                    <select class="form-control district"></select>
                                            </div>
                                            <div class="col-md-4">
                                                <br>
                                                <h6 class="small mb-1" for="inputRol">Seleccionar Código de Vehículo</h6>
                                                <select id="id_carga" name="cargas_id" class="form-control">
                                                    <option>------Seleccionar------</option>
                                                    @foreach($cargas as $carg)
                                                    <option value="{{ $carg->id }}" >{{ $carg->vehiculos_id}}</option>
                                                    @endforeach
                                             </select>
                                            </div>

                                        </div>
                                    </div>


                                </div>
                                <br>
                                <div class="text-center">
                                    <!-- Save changes button-->
                                    <button class="btn btn-primary" type="submit"><em class='bx bx-check'></em>Guardar
                                    </button>
                                    <!-- cancel changes button-->
                                    <button class="btn btn-primary" type="button"><em class='bx bxs-x-circle'></em>Cancelar
                                    </button>
                                </div>
                            </form>
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
@endsection
