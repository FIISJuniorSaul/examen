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
                                    USUARIOS
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-body page-body-light pt-3 px-2">
                    <div class="card card-header-actions">
                        <div class="card-header">
                            Portafolio
                            <a href="{{route('user.create')}}" class="btn btn-primary lift"><em class='bx bxs-user-plus'></em>{{ __('Crear Usuario') }}</a>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end py-2 px-4">
                            <form class="input-group">
                                <input name="busqueda" class="form-control me-md-2" type="search" placeholder="Ingrese nombre" aria-label="Search" autocomplete="off">
                                <button class="btn btn-outline-primary btn-sm" type="submit"> <em class='bx bx-search-alt'></em>Buscar</button>
                            </form>
                        </div>
                        <div class="card-body py-2">
                            <table class="table table-sm table-bordered table-hover " id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>DNI</th>
                                        <th>Nombres</th>
                                        <th>Apellido Paterno</th>
                                        <th>Apellido Materno</th>
                                        <!--<th>Telefono</th>
                                        <th>Rol</th>
                                        <th>Estado</th>
                                        <th>Acciones</th>-->
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($personas as $item)
                                    <tr>
                                        <td>{{$item->dni}}</td>
                                        <td>{{$item->nombre}}</td>
                                        <td>{{$item->apellido_paterno}}</td>
                                        <td>{{$item->apellido_materno}}</td>
                                        <td><div class="badge bg-primary text-white rounded-pill">Activo</div></td>
                                        <td>
                                            <form action="{{route('user.destroy', $item->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                            <button class="btn btn-datatable btn-icon btn-transparent-table me-2"><i class='bx bx-dots-vertical-rounded'></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-table" type="submit" return =("alert('estas seguro de eliminar')")><i class='bx bx-trash' ></i></button>
                                        </form>
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
