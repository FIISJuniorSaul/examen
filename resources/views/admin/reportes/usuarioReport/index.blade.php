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
                                    REPORTE-USUARIOS
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-body page-body-light pt-3 px-2">
                    <div class="card card-header-actions">
                        <div class="card-header">
                            Listado
                            <div>
                               <!-- <a href="/admin/configuracion/usuario/add" class="btn btn-primary lift"><em class='bx bxs-user-plus'></em>{{ __('Crear Usuario') }}</a> --> 
                            <!--<a href='/admin/operaciones/vehiculos/add' class="btn btn-primary lift" type="button"><em class='bx bxs-report'></em>Reportar</a>-->
                            </div>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end py-2 px-4">
                            <form class="input-group">
                                <button class="btn btn-outline-primary btn-sm me-md-2" type="submit"> <em class='bx bx-search-alt'></em>Buscar</button>
                                <input name="busqueda" class="form-control " type="search" placeholder="Ingrese DNI" aria-label="Search" autocomplete="off">
                               
                            </form>
                        </div>
                        <div class="card-body py-2">
                            <table class="table table-sm table-bordered table-hover " id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Nº</th>
                                        <th>Nombre</th>
                                        <th>DNI</th>
                                        <th>Email</th>
                                        <th>Estado</th>
                                        <th>Sesión</th>
                                        <th>actions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>hector</td>
                                        <td>46257135</td>
                                        <td>hector_mariño@gratin.pro.pe</td>
                                        <td>activo</td>
                                        <td>2022-11-09T23:22:35</td>
                                    
                                        <td>
                                           <!-- <button class="btn btn-datatable btn-icon btn-transparent-table me-2"><i class='bx bx-dots-vertical-rounded'></i></button>-->
                                            <button class="btn btn-datatable btn-icon btn-transparent-table"><em class='bx bxs-report'></em></button>
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
