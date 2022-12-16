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
                                    {{ __('INCIDENTE') }}
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-body page-body-light pt-3 px-2">
                    <div class="card card-header-actions">
                        <div class="card-header">
                            {{ __('List') }} {{ __('incidente') }}
                            <div>

                                <a href="{{route('incidente.create')}}" class="btn btn-primary lift"><em class='bx bxs-truck'></em>{{ __('New') }} {{ __('incidente') }}</a>
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
                                        <th>{{ __('estado') }}</th>
                                        <th>{{ __('descripcion') }}</th>
                                        <th>{{ __('valoracion') }}</th>
                                        <th>{{ __('usuario reportador') }}</th>
                                        <th>{{ __('Actions') }}</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($incidente as $in)
                                    <tr>
                                        <td>{{$in->estado}}</td>
                                        <td>{{$in->descripcion}}</td>
                                        <td>{{$in->valoracion}}</td>
                                        <td>{{$in->User->persona->nombre}}</td>
                                        <td>
                                            <form action="{{route('incidente.destroy',$in->id)}}" method="POST">
                                                <a class="btn btn-primary btn-sm lift" href="{{route('incidente.edit',$in->id)}}"><em class='bx bxs-edit-alt'></em></a>
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
