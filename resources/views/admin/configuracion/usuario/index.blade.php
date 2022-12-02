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
                                    {{ __('Users') }}
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-body page-body-light pt-3 px-2">
                    <div class="card card-header-actions">
                        <div class="card-header"> {{ __('List of all users') }}
                            <a href="{{route('usuario.create')}}" class="btn btn-primary lift"><em class='bx bxs-user-plus'></em>{{ __('Create user') }}</a>
                        </div>
                        <div class="card-body py-2">
                            <table class="table table-sm table-bordered table-hover " id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>DNI</th>
                                        <th>{{ __('Name') }}</th>
                                        <th>{{ __('Last name') }}</th>
                                        <th>{{ __('Mail') }}</th>
                                        <th>{{ __('Telephone') }}</th>
                                        <th>{{ __('User') }}</th>
                                        <th>{{ __('Role') }}</th>
                                        <th>{{ __('State') }}</th>
                                        <th>{{ __('Actions') }}</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($personas as $item)
                                    <tr>


                                        <td>{{$item->dni}}</td>
                                        <td>{{$item->nombre}}</td>
                                        <td>{{$item->apellido_paterno}} {{$item->apellido_materno}}</td>
                                        <td>{{$item->correo}}</td>
                                        <td>{{$item->telefono}}</td>
                                        <td>{{$item->usuario}}</td>
                                        <td>{{$item->rol}}</td>
                                        <td>{{$item->condicion}}</td>
                                        <td>
                                            <form action="{{route('usuario.destroy',$item->id)}}" method="POST">
                                                <a class="btn btn-primary btn-sm lift" href="{{route('usuario.edit',$item->id)}}"><em class='bx bxs-edit-alt'></em></a>
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
