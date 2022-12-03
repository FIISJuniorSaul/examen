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
                                    {{ __('OUR CLIENTS') }}
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-body page-body-light pt-3 px-2">
                    <div class="card card-header-actions">
                        <div class="card-header">
                            {{ __('Clients/ Data in the table') }}
                            <div>
                                <a href="{{route('clienteJuridico.create')}}" class="btn btn-primary lift"><em class='bx bxs-user-plus'></em>{{ __('. New client') }}</a>
                            </div>

                        </div>
                        <div>
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                  <a class="nav-link active" aria-current="page" href="{{route('clienteJuridico')}}">{{ __('Legal Clients') }}</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link " href="{{route('clienteNatural')}}">{{ __('Natural Clients') }}</a>
                                </li>
                              </ul>
                        </div>
                        @if (\Session::has('success'))
                            <div class="alert alert-success">
                                <ul>
                                    <li>{{\Session::get('success')}}</li>
                                </ul>
                            </div>
                        @endif
                        <div class="card-body py-2">
                            <table class="table table-sm table-bordered table-hover " id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>{{ __('RUC number') }}</th>
                                        <th>{{ __('Business name') }} </th>
                                        <th>{{ __('Condition') }}</th>
                                        <th>{{ __('Department') }}</th>
                                        <th>{{ __('Province') }}</th>
                                        <th>{{ __('District') }}</th>
                                        <th>{{ __('Address') }}</th>
                                        <th>{{ __('Email') }} </th>
                                        <th>{{ __('Telephone') }}</th>
                                        <th>{{ __('Actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clientesju as $clienteju)
                                    <tr>
                                        <td>{{$clienteju->ruc}}</td>
                                        <td>{{$clienteju->razon_social}}</td>
                                        <td>{{$clienteju->estado}}</td>
                                        <td>{{$clienteju->departamento}}</td>
                                        <td>{{$clienteju->provincia}}</td>
                                        <td>{{$clienteju->distrito}}</td>
                                        <td>{{$clienteju->direccion}}</td>
                                        <td>{{$clienteju->persona->correo}}</td>
                                        <td>{{$clienteju->persona->telefono}}</td>
                                        <td>
                                            <form action="{{route('clienteJuridico.destroy',$clienteju->id)}}" method="POST">
                                                <a class="btn btn-primary btn-sm lift" href="{{route('clienteJuridico.edit',$clienteju->id)}}"><em class='bx bxs-edit-alt'></em></a>
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
