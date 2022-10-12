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
                            Listado de las Rutas
                            <a href="{{route('rutasdestino.create')}}" class="btn btn-primary lift"><em class='bx bx-trip'></em>{{ __('Nueva Ruta') }}</a>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end py-2 px-4">
                            <form class="input-group">
                            <button class="btn btn-outline-primary btn-sm me-md-2" type="submit"> <em class='bx bx-search-alt'></em>Buscar</button>
                                <input name="busqueda" class="form-control me-md-2" type="search" placeholder="Ingrese ruta" aria-label="Search" autocomplete="off">

                            </form>
                        </div>
                        <div class="card-body py-2">
                            <table class="table table-sm table-bordered table-hover " id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>DEPARTAMENTO</th>
                                        <th>PROVINCIA</th>
                                        <th>DISTRITO</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($ruta_i as $rut)
                                    <tr>
                                        <td>{{$rut->departamento}}</td>
                                        <td>{{$rut->provincia}}</td>
                                        <td>{{$rut->distrito}}</td>
                                        <td>
                                            <button class="btn btn-datatable btn-icon btn-transparent-table me-2"><i class='bx bx-dots-vertical-rounded'></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-table"><i class='bx bx-trash' ></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-table"><i class='bx bxs-file-pdf'></i></button>

                                        </td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
