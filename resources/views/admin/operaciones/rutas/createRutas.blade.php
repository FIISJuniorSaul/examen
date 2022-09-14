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
                        <form>
                            
                            <div class="row g-3 px-6">
                                <div class="col">
                                    <h5>Punto de Inicio</h5>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Lima</option>
                                    </select>

                                </div>
                                <div class="col">
                                    <h5>Distancia</h5>
                                    <input type="text" class="form-control" placeholder="N° de distancia"
                                           >

                                </div>
                                
                            </div>

                            <div class="row g-3 px -6">
                            <div class="col">
                                    <h5>Punto Final</h5>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Barranco</option>
                                        <option selected>Breña</option>
                                        <option selected>Carabayllo</option>
                                        <option selected>Cieneguilla</option>
                                        <option selected>La Victoria</option>
                                    </select>

                                </div>
                                </div>
                      
                                

                                <div class="btn">
                                    <button class="btn btn-primary me-md-2" type="button"><i 
                                     class='bx bx-save'></i></i>Guardar</button>
                                    <button class="btn btn-primary" type="button"><em
                                                                class='bx bxs-x-circle'></em>Cancelar</button>
                                </div>

                        </form>

                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection