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
                                            <form action="{{route('carga.destroy',$car->id)}}" method="POST">
                                                <a class="btn btn-primary btn-sm lift" href="{{route('carga.edit',$car->id)}}"><em class='bx bxs-edit-alt'></em></a>
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
            </main>
        </div>
    </div>
@endsection
