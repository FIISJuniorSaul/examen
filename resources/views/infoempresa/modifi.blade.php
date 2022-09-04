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
                                    INFORMACION DE LA EMPRESA
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-body page-body-light pt-3 px-2">
                    <div class="card card-header-actions">
                        <div class="card-header">
                            Datos de empresa
                        </div>
                        <div class="page-body page-body-light pt-3 px-2">
                            <form>
                                <div class="row g-3">
                                    <div class="col">
                                        <h5>Numero de Ruc</h5>
                                        <input type="text" class="form-control" placeholder="RUC"
                                            aria-label="RUC_ID">
                                    </div>
                                    <div class="col">
                                        <h5>Razon social</h5>
                                        <input readonly type="text" class="form-control" placeholder="Razon social"
                                            aria-label="business_name">
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
                        </div>


                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
