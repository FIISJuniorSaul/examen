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
                                    {{ __('VEHICLES') }}
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-body page-body-light pt-3 px-2">
                    <div class="card card-header-actions">
                        <div class="card-header">
                            {{ __('List') }} {{ __('Vehicles') }}
                            <div>

                                <a href="{{route('vehiculo.create')}}" class="btn btn-primary lift"><em class='bx bxs-truck'></em>{{ __('New') }} {{ __('Vehicle') }}</a>
                            </div>
                        </div>

                        <div class="card-body py-2">
                            <table class="table table-sm table-bordered table-hover " id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>{{ __('Type of') }} {{ __('Vehicle') }}</th>
                                        <th>{{ __('License plate') }}</th>
                                        <th>{{ __('Brand') }}</th>
                                        <th>{{ __('Gasoline consumption') }} /gal</th>
                                        <th>{{ __('Loading capacity') }}/T</th>
                                        <th>{{ __('Driver') }}</th>
                                        <th>{{ __('Actions') }}</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($vehiculos as $vehi)
                                    <tr>
                                        <td>{{$vehi->modelo}}</td>
                                        <td>{{$vehi->placa}}</td>
                                        <td>{{$vehi->marca}}</td>
                                        <td>{{$vehi->consumo_gasolina}}</td>
                                        <td>{{$vehi->capacidad_carga}}</td>
                                        <td>{{$vehi->user->persona->nombre}}</td>
                                        <td>
                                            <form action="{{route('vehiculo.destroy',$vehi->id)}}" method="POST">
                                                <a class="btn btn-primary btn-sm lift" href="{{route('vehiculo.edit',$vehi->id)}}"><em class='bx bxs-edit-alt'></em></a>
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
