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
                                    {{ __('BURDENS') }}
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-body page-body-light pt-3 px-2">
                    <div class="card card-header-actions">
                        <div class="card-header">
                            {{ __('List of Loads') }}
                            <a href='{{route('carga.create')}}' class="btn btn-primary lift"><em class='bx bxs-package'></em>{{ __('. New Load') }}</a>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end py-2 px-4">
                            <form class="input-group">
                            <button class="btn btn-outline-primary btn-sm me-md-2" type="submit"> <em class='bx bx-search-alt'></em>{{ __('Search') }}</button>
                                <input name="busqueda" class="form-control me-md-2" type="search" placeholder="Ingrese ruta" aria-label="Search" autocomplete="off">

                            </form>
                        </div>
                        <div class="card-body py-2">
                            <table class="table table-sm table-bordered table-hover " id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th> {{ __('CODE') }}</th>
                                        <th>{{ __('COST') }}</th>
                                        <th>{{ __('WEIGHT') }}</th>
                                        <th>{{ __('VEHICLE PLATE') }}</th>
                                        <th>{{ __('ACTIONS') }}</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($cargas as $car)
                                    <tr>
                                        <td>{{$car->codigo}}</td>
                                        <td>{{$car->costo}}</td>
                                        <td>{{$car->peso}}</td>
                                        <td>{{$car->Vehiculo->placa}}</td>
                                        <td>
                                            <button class="btn btn-datatable btn-icon btn-transparent-table me-2"><em class='bx bxs-edit-alt'></em></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-table"><i class='bx bx-trash' ></i></button>
                                            <button type="summit" oneclick="this.disable=true" class="btn btn-datatable btn-icon btn-transparent-table"><i class='bx bxs-file-pdf'></i></button>

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
