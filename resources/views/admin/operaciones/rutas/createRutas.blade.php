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
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputDepartament">Departamento</label>
                                        <input class="form-control" name="departamento" id="inputDepartament" type="text"
                                            placeholder="departamento" />

                                    </div>
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputProvince">Provincia</label>
                                        <input class="form-control" name="provincia" id="inputProvince" type="text"
                                            placeholder="provincia" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputDistrit">Distrito</label>
                                        <input class="form-control" name="distrito" id="inputDistrit" type="text"
                                            placeholder="provincia" />
                                    </div>
                                </div>
                                <br>
                                <div class="text-center">
                                    <!-- Save changes button-->
                                    <button class="btn btn-primary" type="submit"><em class='bx bxs-memory-card'></em>Guardar
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
