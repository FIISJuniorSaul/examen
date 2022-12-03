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
                            {{ __('Client data') }}
                        </div>
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page"
                                    href="{{ route('clienteJuridico.create') }}">{{ __('Legal Client') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="{{ route('clienteNatural.create') }}">{{ __('Natural Client') }}</a>
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
                                            <div class="card-header">{{ __('Legal client details') }}</div>
                                            <div class="card-body">
                                                @if (\Session::has('warning'))
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            <li>{{ \Session::get('warning') }}</li>
                                                        </ul>
                                                    </div>
                                                @endif
                                                <label for="dni">{{ __('Enter RUC') }}</label>
                                                <div class="input-group">
                                                    <input type="number" min="1" max="99999999999" id="ruc"
                                                        name="ruc" value="" class="form-control"
                                                        placeholder="***********" />&nbsp;
                                                    <button class="btn btn-primary" id="btnbuscar" align="right"><em
                                                            class='bx bx-search-alt-2'></em>{{ __('Search') }}</button>
                                                </div>
                                                <div class="col-md-5">
                                                    <small id="mensaje" style="color: red;display: none;font-size: 12pt;">
                                                        <i
                                                            class="fa fa-remove"></i>{{ __(' The RUC number is not valid.') }}
                                                    </small>
                                                </div>
                                                <label for="dni">{{ __('Enter DNI') }}</label>
                                                <div class="input-group">
                                                    <input type="number" min="1" max="********" id="dni"
                                                        class="form-control" placeholder="" />&nbsp;
                                                    <button class="btn btn-primary" id="buscardni" align="right"
                                                        onClick="consultarDni()"><em
                                                            class='bx bx-search-alt-2'></em>{{ __('Search') }}</button>
                                                </div>
                                                <div class="col-md-5">
                                                    <small id="mensaje" style="color: red;display: none;font-size: 12pt;">
                                                        <i
                                                            class="fa fa-remove"></i>{{ __('The DNI number is not valid.') }}
                                                    </small>
                                                </div>
                                                <form action="{{ route('clienteJuridico.update', $clientejuridico) }}" method="post" enctype="multipart/form-data">
                                                    {{ method_field('PATCH') }}
                                                    @csrf
                                                    <!-- Form Group (username)-->
                                                    <div class="row gx-3 mb-3">
                                                        <!-- Form Group (first name)-->
                                                        <div class="col-md-6">
                                                            <label class="small mb-1"
                                                                for="inputNºDERUC">{{ __('RUC number') }} </label>
                                                            <input class="form-control" id="txtruc" type="text"
                                                                name="ruc" placeholder="" value="{{$clientejuridico->ruc}}" readonly />
                                                        </div>
                                                        <!-- Form Group (last name)-->
                                                        <div class="col-md-6">
                                                            <label class="small mb-1"
                                                                for="inputRazónSocial">{{ __('Business name') }}</label>
                                                            <input class="form-control" id="txtrazon" type="text"
                                                                name="razon_social" placeholder="" value="{{$clientejuridico->razon_social}}"
                                                                readonly />
                                                        </div>
                                                    </div>
                                                    <!-- Form Row-->
                                                    <div class="row gx-3 mb-3">
                                                        <!-- Form Group (first name)-->
                                                        <div class="col-md-6">
                                                            <label class="small mb-1"
                                                                for="inputNameEmpresa">{{ __('State') }}</label>
                                                            <input class="form-control" id="txtgrupo" type="text"
                                                                name="estado" placeholder="" value="{{$clientejuridico->estado}}" readonly />
                                                        </div>
                                                        <!-- Form Group (last name)-->
                                                        <div class="col-md-6">
                                                            <label class="small mb-1"
                                                                for="inputDirección">{{ __('Address') }}</label>
                                                            <input class="form-control" id="txtdireccion" type="text"
                                                                name="direccion" placeholder="" value="{{$clientejuridico->direccion}}" readonly />
                                                        </div>
                                                    </div>
                                                    <!-- Form Row-->
                                                    <div class="row gx-3 mb-3">
                                                        <!-- Form Group (first name)-->
                                                        <div class="col-md-4">
                                                            <label class="small mb-1"
                                                                for="inputNameEmpresa">{{ __('Department') }}</label>
                                                            <input class="form-control" id="txtdepartamento"
                                                                type="text" name="departamento" placeholder=""
                                                                value="{{$clientejuridico->departamento}}" readonly />
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="small mb-1"
                                                                for="inputDirección">{{ __('Province') }}</label>
                                                            <input class="form-control" id="txtprovincia" type="text"
                                                                name="provincia" placeholder="" value="{{$clientejuridico->provincia}}"
                                                                readonly />
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="small mb-1"
                                                                for="inputNameEmpresa">{{ __('District') }}</label>
                                                            <input class="form-control" id="txtdistrito" type="text"
                                                                name="distrito" placeholder="" value="{{$clientejuridico->distrito}}" readonly />
                                                        </div>
                                                    </div>
                                                    <!-- Form Row-->
                                                    <div class="card-body">
                                                        <!--search-->
                                                        <div
                                                            class="d-grid gap-2 d-md-flex justify-content-md-end py-2 px-4">
                                                        </div>
                                                        <!-- Form Group (username)-->
                                                        <div class="row gx-3 mb-3">
                                                            <!-- Form Group (DNI)-->
                                                            <div class="col-md-6">
                                                                <label class="small mb-1"
                                                                    for="inputCode">{{ __('Code') }}</label>
                                                                <input class="form-control" name="codigo" id="codigo" value="{{$clientejuridico->codigo}}"
                                                                    type="text" placeholder="" />
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="small mb-1" for="inputDNI">DNI</label>
                                                                <input class="form-control" name="dni"
                                                                    id="dni_ciudadano" type="text"
                                                                    placeholder="********" readonly value="{{$clientejuridico->persona->dni}}" />
                                                            </div>
                                                            <!-- Form Group (name)-->
                                                            <div class="col-md-6">
                                                                <label class="small mb-1"
                                                                    for="inputName">{{ __('Names') }}</label>
                                                                <input class="form-control" name="nombre" id="nombres"
                                                                    type="text" placeholder="" readonly  value="{{$clientejuridico->persona->nombre}}"/>
                                                            </div>
                                                        </div>
                                                        <!-- Form Row-->
                                                        <div class="row gx-3 mb-3">
                                                            <!-- Form Group (last name)-->
                                                            <div class="col-md-6">
                                                                <label class="small mb-1"
                                                                    for="inputFirstName">{{ __('Fathers last name') }}</label>
                                                                <input class="form-control" name="apellido_paterno"
                                                                    id="apellido_paterno" type="text" placeholder="" value="{{$clientejuridico->persona->apellido_paterno}}"
                                                                    readonly />
                                                            </div>
                                                            <!-- Form Group (last name)-->
                                                            <div class="col-md-6">
                                                                <label class="small mb-1"
                                                                    for="inputLastName">{{ __('Mothers last name') }}</label>
                                                                <input class="form-control" name="apellido_materno"
                                                                    id="apellido_materno" type="text" placeholder="" value="{{$clientejuridico->persona->apellido_materno}}"
                                                                    readonly />
                                                            </div>
                                                        </div>
                                                        <div class="row gx-3 mb-3">
                                                            <div class="col-md-6">
                                                                <label class="small mb-1"
                                                                    for="inputEmail">{{ __('E-Mail Address') }}</label>
                                                                <input class="form-control" name="correo"
                                                                    id="inputEmail" type="text"
                                                                    placeholder="" value="{{$clientejuridico->persona->correo}}" />
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="small mb-1"
                                                                    for="inputTelephone">{{ __('Telephone') }}</label>
                                                                <input class="form-control" name="telefono"
                                                                    id="inputTelephone" type="number"
                                                                    placeholder="" value="{{$clientejuridico->persona->telefono}}" />
                                                            </div>
                                                        </div>
                                                        <div class="text-center">
                                                            <br>
                                                            <!-- Save changes button-->
                                                            <button class="btn btn-primary" type="submit"><em
                                                                    class='bx bx-check'></em>{{ __('Save') }}</button>
                                                            <!-- cancel changes button-->
                                                            <button class="btn btn-primary" type="submit"><em
                                                                    class='bx bxs-x-circle'></em>{{ __('Cancel') }}</button>
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
