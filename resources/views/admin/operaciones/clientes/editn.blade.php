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
                                    <th>{{ __('ADD NEW CUSTOMER') }}</th>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-body page-body-light pt-3 px-2">
                    <div class="card card-header-actions">
                        <div class="card-header">
                            Datos del cliente
                        </div>
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{route('clienteJuridico.create')}}">{{ __('Legal Client') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{route('clienteNatural.create')}}">{{ __('Natural Client') }}</a>
                            </li>
                        </ul>
                        <main>
                            <!-- Main page content-->
                            <div class="container-xl px-4 mt-4">
                                <hr class="mt-0 mb-4" />
                                <div class="row">
                                    <div class="#">
                                        <!-- Account details card-->
                                        <div class="card mb-4">
                                            <div class="card-header">{{ __('Natural customer details') }}</div>
                                            <div class="card-body">
                                                @if (\Session::has('warning'))
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            <li>{{ \Session::get('warning') }}</li>
                                                        </ul>
                                                    </div>
                                                @endif
                                                <label for="dni">{{ __('Enter DNI') }}</label>
                                                <div class="input-group">
                                                    <input type="number" min="1" max="99999999" id="dni"
                                                        class="form-control" placeholder="********" />&nbsp;
                                                    <button class="btn btn-primary" id="buscardni" align="right"
                                                        onClick="consultarDni()"><em class='bx bx-search-alt-2'></em>{{ __('Search') }}</button>
                                                </div>
                                                <div class="col-md-5">
                                                    <small id="mensaje" style="color: red;display: none;font-size: 12pt;">
                                                        <i class="fa fa-remove"></i> {{ __('The DNI number is not valid.') }}
                                                    </small>
                                                </div>
                                                <form action="{{ route('clienteNatural.update', $clientenatural) }}" method="post" enctype="multipart/form-data">
                                                    {{method_field('PATCH')}}
                                                    @csrf
                                                    <!--search-->
                                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end py-2 px-4">
                                                    </div>
                                                    <!-- Form Group (username)-->
                                                    <div class="row gx-3 mb-3">
                                                        <div class="col-md-6">
                                                            <label class="small mb-1" for="inputCode">{{ __('Code') }}</label>
                                                            <input class="form-control" name="codigo" id="codigo"
                                                                type="text" placeholder="" value="{{$clientenatural->codigo}}">
                                                        </div>
                                                        <!-- Form Group (DNI)-->
                                                        <div class="col-md-6">
                                                            <label class="small mb-1" for="inputDNI">DNI</label>
                                                            <input class="form-control" name="dni" id="dni_ciudadano"
                                                                type="text" placeholder="********" readonly  value="{{$clientenatural->persona->dni}}">
                                                        </div>
                                                        <!-- Form Group (name)-->
                                                        <div class="col-md-6">
                                                            <label class="small mb-1" for="inputName">{{ __('Names') }}</label>
                                                            <input class="form-control" name="nombre" id="nombres"
                                                                type="text" placeholder="" readonly  value="{{$clientenatural->persona->nombre}}">
                                                        </div>
                                                    </div>
                                                    <!-- Form Row-->
                                                    <div class="row gx-3 mb-3">
                                                        <!-- Form Group (last name)-->
                                                        <div class="col-md-6">
                                                            <label class="small mb-1" for="inputFirstName">{{ __('Fathers last name') }}</label>
                                                            <input class="form-control" name="apellido_paterno"
                                                                id="apellido_paterno" type="text"
                                                                placeholder="" readonly  value="{{$clientenatural->persona->apellido_paterno}}">
                                                        </div>
                                                        <!-- Form Group (last name)-->
                                                        <div class="col-md-6">
                                                            <label class="small mb-1" for="inputLastName">{{ __('Mothers last name') }}</label>
                                                            <input class="form-control" name="apellido_materno"
                                                                id="apellido_materno" type="text"
                                                                placeholder=" " readonly  value="{{$clientenatural->persona->apellido_materno}}">
                                                        </div>
                                                    </div>
                                                    <div class="row gx-3 mb-3">
                                                        <div class="col-md-6">
                                                            <label class="small mb-1" for="inputEmail">{{ __('E-Mail Address') }}</label>
                                                            <input class="form-control" name="correo" id="inputEmail"
                                                                type="text" placeholder="example@rayosac.com"  value="{{$clientenatural->persona->correo}}">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="small mb-1" for="inputTelephone">{{ __('Telephone') }}</label>
                                                            <input class="form-control" name="telefono" id="inputTelephone"
                                                                type="number" placeholder=""  value="{{$clientenatural->persona->telefono}}">
                                                        </div>
                                                    </div>
                                                    <!--estado roles y permisos-->


                                                    <div class="text-center">
                                                        <br>
                                                        <!-- Save changes button-->
                                                        <button class="btn btn-primary" type="submit"><em class='bx bx-check'></em>{{ __('Save') }}</button>
                                                        <!-- cancel changes button-->
                                                        <form action="{{route('clienteNatural.indexClienteNatural')}}" method="POST">
                                                            <a class="btn btn-primary me-md-2" href="{{route('clienteNatural.indexClienteNatural')}}" onclick="return confirm('seguro que desea cancelar la edicion?');"><em class='bx bxs-left-arrow-square'></em> {{ __('Cancel') }}</a>
                                                            @csrf
                                                        </form>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </main>
                        <footer class="footer-admin mt-auto footer-light">
                            <div class="container-xl px-4">
                                <div class="row">
                                    <div class="col-md-6 small">Copyright © Empresa de Transportes Rayo SAC 2022</div>
                                    <div class="col-md-6 text-md-end small">
                                        <a href="#!">Privacy Policy</a>
                                        ·
                                        <a href="#!">Terms &amp; Conditions</a>
                                    </div>
                                </div>
                            </div>
                        </footer>
                    </div>
                </div>
        </div>
    </div>
@endsection
