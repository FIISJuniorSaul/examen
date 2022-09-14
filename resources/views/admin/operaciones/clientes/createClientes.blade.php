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
                                CLIENTES
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-body page-body-light pt-3 px-2">
                <div class="card card-header-actions">
                    <div class="card-header">
                        Datos del Cliente/Empresa
                    </div>
                    <div class="card-body">


                        <br>
                        <form>
                            
                            <div class="row g-3 px-6">
                                <div class="col">
                                    <h5>Nombres</h5>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Luis</option>
                                    </select>

                                </div>
                                <div class="col">
                                    <h5>Apellidos</h5>
                                    <input type="text" class="form-control" placeholder="N° de distancia"
                                           >

                                </div>
                                
                            </div>

                            <div class="row g-3 px -6">
                            <div class="col">
                                    <h5>Edad</h5>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>BA</option>
                                        <option selected>B</option>
                                        <option selected>Coll</option>
                                        <option selected>Cien</option>
                                        <option selected>Lau</option>
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