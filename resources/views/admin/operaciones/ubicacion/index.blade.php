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
                                    {{ __('UBICACION') }}
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-body page-body-light pt-3 px-2">
                    <div class="card card-header-actions">
                        <div class="card-header">
                            {{ __('List') }} {{ __('ubicacion') }}
                            <div>

                                <a href="{{route('ubicacion.create')}}" class="btn btn-primary lift"><em class='bx bxs-truck'></em>{{ __('New') }} {{ __('ubicacion') }}</a>
                            </div>
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
                                        <th>{{ __('depatamento') }}</th>
                                        <th>{{ __('provincia') }}</th>
                                        <th>{{ __('distrito') }}</th>
                                        <th>{{ __('referencia') }}</th>
                                        <th>{{ __('Actions') }}</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($ubicacion as $ub)
                                    <tr>
                                        <td>{{$ub->departamento}}</td>
                                        <td>{{$ub->provincia}}</td>
                                        <td>{{$ub->distrito}}</td>
                                        <td>{{$ub->referencia}}</td>
                                        <td>
                                            <form action="{{route('ubicacion.destroy',$ub->id)}}" method="POST">
                                                <a class="btn btn-primary btn-sm lift" href="{{route('ubicacion.edit',$ub->id)}}"><em class='bx bxs-edit-alt'></em></a>
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
