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
                                <a href="{{route('clienteNatural.create')}}" class="btn btn-primary lift"><em class='bx bx-trip'></em>{{ __('Nuevo cliente') }}</a>
                            </div>

                        </div>
                        <div>
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                  <a class="nav-link " aria-current="page" href="{{route('clienteJuridico')}}">{{ __('Legal Clients') }}</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link  active" href="{{route('clienteNatural')}}">{{ __('Natural Clients') }}</a>
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
                                        <th>{{ __(' DNI number') }}</th>
                                        <th>{{ __('Names') }}</th>
                                        <th>{{ __('Fathers last name') }}</th>
                                        <th>{{ __('Mothers last name') }}</th>
                                        <th>{{ __('Email') }} </th>
                                        <th>{{ __('Telephone') }}</th>
                                        <th>{{ __('Actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clientesn as $clienN)
                                    <tr>
                                        <td>{{$clienN->persona->dni}}</td>
                                        <td>{{$clienN->persona->nombre}}</td>
                                        <td>{{$clienN->persona->apellido_paterno}}</td>
                                        <td>{{$clienN->persona->apellido_materno}}</td>
                                        <td>{{$clienN->persona->telefono}}</td>
                                        <td>{{$clienN->persona->correo}}</td>
                                        <td>
                                            <form action="{{route('clienteNatural.destroy',$clienN->id)}}" method="POST">
                                                <a class="btn btn-primary btn-sm lift" href="{{route('clienteNatural.edit',$clienN->id)}}"><em class='bx bxs-edit-alt'></em></a>
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
