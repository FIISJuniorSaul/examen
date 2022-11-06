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
                                    VEHÍCULOS
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-body page-body-light pt-3 px-2">
                    <div class="card card-header-actions">
                        <div class="card-header">
                            Vehículos/Datos en la tabla
                            <div>

                                <a href="{{route('vehiculo.create')}}" class="btn btn-primary lift"><em class='bx bxs-truck'></em>{{ __('. Nuevo Vehiculo') }}</a>
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
                                        <th>Tipo de Vehículo</th>
                                        <th>Placa</th>
                                        <th>Marca</th>
                                        <th>Consumo Galones</th>
                                        <th>Capacidad de Carga</th>
                                        <th>Conductor</th>
                                        <th>Acciones</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>M1</td>
                                        <td>F5U-597</td>
                                        <td>HILUX</td>
                                        <td>50</td>
                                        <td>15T</td>
                                        <td>ALVARO SAMANIEGO</td>
                                        <td>
                                            <button class="btn btn-datatable btn-icon btn-transparent-table me-2"><em class='bx bxs-edit-alt'></em></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-table"><em class='bx bx-trash' ></em></button>
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
