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
                                    COTIZAR
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-body page-body-light pt-3 px-2">
                    <div class="card card-header-actions">
                        <div class="card-header">
                            COTIZACIONES/Datos en la tabla
                            <div>
                               <!-- <a href="/admin/configuracion/usuario/add" class="btn btn-primary lift"><em class='bx bxs-user-plus'></em>{{ __('Crear Usuario') }}</a> -->
                            <a href='/admin/operaciones/cotizar/add' class="btn btn-primary lift" type="button"><em class='bx bxs-truck'></em>Nueva Cotización</a>
                            </div>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end py-2 px-4">
                            <form class="input-group">
                                <button class="btn btn-outline-primary btn-sm me-md-2" type="submit"> <em class='bx bx-search-alt'></em>Buscar</button>
                                <input name="busqueda" class="form-control " type="search" placeholder="Ingrese nombre del vehiculo" aria-label="Search" autocomplete="off">

                            </form>
                        </div>
                        <div class="card-body py-2">
                            <table class="table table-sm table-bordered table-hover " id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Usuario</th>
                                        <th>Razón social</th>
                                        <th>E-mail</th>
                                        <th>Tipo de comprobante</th>
                                        <th>Ruta</th>
                                        <th>Vehículo</th>
                                        <th>Total(S/.)</th>
                                        <th>Acciones</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>alvar01</td>
                                        <td>Hermanos cuellar S.A.C</td>
                                        <td>cuellar12_2022@hotmail.com</td>
                                        <td>comprobante01</td>

                                        <td>Lima-Callao</td>
                                        <th>Fuso_AAA</th>
                                        <th>25</th>
                                        <td>
                                            <button class="btn btn-datatable btn-icon btn-transparent-table me-2"><i class='bx bx-dots-vertical-rounded'></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-table"><i class='bx bx-trash' ></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-table"><i class='bx bxs-file-pdf'></i></button>

                                        </td>

                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
