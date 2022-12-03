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
                                    {{ __('ROUTES') }}
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-body page-body-light pt-3 px-2">
                    <div class="card card-header-actions">
                        <div class="card-header">
                            {{ __('List of Routes') }}
                            <a href="{{ route('rutasdestino.create') }}" class="btn btn-primary lift"><em
                                    class='bx bx-trip'></em>{{ __('. New route') }}</a>
                        </div>
                        <div class="input-group">
                            <div class="col-md-6 col-sm-6">
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end py-2 px-4">
                                    <form class="input-group">
                                        <button class="btn btn-outline-primary btn-sm me-md-2" type="submit"> <em
                                                class='bx bx-search-alt'></em>{{ __('Search') }}</button>
                                        <input name="busqueda" class="form-control me-md-2" type="search"
                                            placeholder="Ingrese ruta" aria-label="Search" autocomplete="off">
                                    </form>
                                </div>
                                <div class="card-body py-2">
                                    <table class="table table-sm table-bordered table-hover " id="datatablesSimple">
                                        <thead>
                                            <tr>
                                                <th>{{ __('ORIGIN DEPARTMENT') }}</th>
                                                <th>{{ __('PROVINCE ORIGIN') }}</th>
                                                <th>{{ __('ORIGIN DISTRICT') }}</th>
                                                <th>{{ __('ACTIONS') }}</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($rutas_origenes as $ru)
                                                <tr>
                                                    <td>{{ $ru->distrito_origen->provincia->departamento->nombre }}</td>
                                                    <td>{{ $ru->distrito_origen->provincia->nombre }}</td>
                                                    <td>{{ $ru->distrito_origen->nombre }}</td>
                                                    <td>
                                                        <form action="{{route('ruta.destroy',$ru->id)}}" method="POST">
                                                            <a class="btn btn-primary btn-sm lift" href="{{route('editarOrigen',$ru->id)}}"><em class='bx bxs-edit-alt'></em></a>
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger btn-sm lift" type="submit" onclick="return confirm('seguro que desea eliminar?');"><em class='bx bx-trash' ></em></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end py-2 px-4">
                                    <form class="input-group">
                                        <button class="btn btn-outline-primary btn-sm me-md-2" type="submit"> <em
                                                class='bx bx-search-alt'></em>{{ __('Search') }}</button>
                                        <input name="busqueda" class="form-control me-md-2" type="search"
                                            placeholder="Ingrese ruta" aria-label="Search" autocomplete="off">
                                    </form>
                                </div>

                                <div class="card-body py-2">
                                    <div class="card-body py-2">
                                        <table class="table table-sm table-bordered table-hover " id="datatablesSimple">
                                            <thead>
                                                <tr>
                                                    <th>{{ __('DESTINATION DEPARTMEN') }}T</th>
                                                    <th>{{ __('DESTINATION PROVINCE') }}</th>
                                                    <th>{{ __('DESTINATION DISTRICT') }}</th>
                                                    <th>{{ __('ACTIONS') }}</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($rutas_destinos as $ru_d)
                                                    <tr>
                                                        <td>{{ $ru_d->distrito_destino->provincia->departamento->nombre }}</td>
                                                        <td>{{ $ru_d->distrito_destino->provincia->nombre }}</td>
                                                        <td>{{ $ru_d->distrito_destino->nombre }}</td>
                                                        <td>
                                                            <form action="{{route('rutasdestino.destroy',$ru_d->id)}}" method="POST">
                                                                <a class="btn btn-primary btn-sm lift" href="{{route('rutasdestino.edit',$ru_d->id)}}"><em class='bx bxs-edit-alt'></em></a>
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger btn-sm lift" type="submit" onclick="return confirm('seguro que desea eliminar?');"><em class='bx bx-trash' ></em></button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
