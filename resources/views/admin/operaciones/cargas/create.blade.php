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
                                    CARGAS
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-body page-body-light pt-3 px-2">
                    <div class="card card-header-actions">
                        <div class="card-header">
                            Datos de la carga
                        </div>
                        <div class="card-body">
                            <br>
                            <form action="{{route('rutasdestino.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row g-3 px-6">


                                    <h6>Detalles Adicionales de la Carga</h6>
                                    <div class="row gx-3 mb-3">
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputDetailsBurden">Código de la
                                                carga</label>
                                            <input class="form-control" id="inputDetailsBurden"
                                                type="number" placeholder="****"
                                                value="" />
                                        </div>

                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputDetailsBurden">Costo de la
                                                carga</label>
                                            <input class="form-control" id="inputDetailsBurden"
                                                type="number" placeholder="00.0"
                                                value="" />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputCostBurden">Descripción de la carga</label>
                                            <input class="form-control" id="inputCostBurden"
                                                type="text" placeholder="Descripción"
                                                value="" />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputDetailsBurden">Peso de la
                                                carga</label>
                                            <input class="form-control" id="inputDetailsBurden"
                                                type="number" placeholder="00"
                                                value="" />
                                        </div>

                                        <div class="col-md-6">
                                            <br>
                                            <h6 class="small mb-1" for="inputRol">Seleccionar vehículo</h6>
                                            <select id="id_role" name="idrol" class="form-control">
                                                <option>------Seleccionar------</option>

                                         </select>
                                        </div>
                                    </div>

                                </div>
                                <br>
                                <div class="text-center">
                                    <!-- Save changes button-->
                                    <button class="btn btn-primary" type="submit"><em class='bx bxs-memory-card'></em>Guardar
                                    </button>
                                    <!-- cancel changes button-->
                                    <button class="btn btn-primary" type="submit"><em class='bx bxs-x-circle'></em>Cancelar
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
