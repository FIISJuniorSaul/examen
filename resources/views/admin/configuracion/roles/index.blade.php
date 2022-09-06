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
                                    ROLES Y PERMISOS
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-body page-body-light pt-3 px-2">
                    <div class="card card-header-actions">
                        <div class="card-header">
                            Portafolio
                            <a href="/admin/configuracion/roles/addroles" class="btn btn-primary lift"><em
                                    class='bx bxs-user-plus'></em>{{ __('Nuevo') }}</a>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end py-2 px-4">
                            <form class="input-group">
                                <input name="busqueda" class="form-control me-md-2" type="search"
                                    placeholder="Ingrese nombre" aria-label="Search" autocomplete="off">

                            </form>
                        </div>
                        <div class="card-body py-9">
                            <table class="table table-sm table-bordered table-hover " id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Rol</th>
                                        <th>Usuario</th>
                                        <th>Roles</th>
                                        <th>Empresa</th>
                                        <th>Ver factura</th>
                                        <th>Vehiculos</th>
                                        <th>Rutas</th>
                                        <th>Clientes</th>
                                        <th>Cotizar</th>
                                        <th>R_vehículos</th>
                                        <th>R_rutas</th>
                                        <th>R_clientes</th>
                                        <th>R_usuario</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>80156048</td>
                                        <td>Activo</td>
                                        <td>Activo</td>
                                        <td>Inactivo</td>
                                        <td>Activo</td>
                                        <td>Inactivo</td>
                                        <td>Inactivo</td>
                                        <td>Activo</td>
                                        <td>Activo</td>
                                        <td>Activo</td>
                                        <td>Inactivo</td>
                                        <td>Inactivo</td>
                                        <td>Inactivo</td>



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
