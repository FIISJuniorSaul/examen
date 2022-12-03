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
                                    {{ __('Add') }} {{ __('User') }}
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-body page-body-light pt-3 px-2">
                    <div class="card card-header-actions">
                        <div class="card-header">
                            {{ __('Personal information') }}
                        </div>
                        <main>
                            <!-- Main page content-->
                            <div class="container-xl px-4 mt-4">
                                <hr class="mt-0 mb-4" />
                                <div class="row">
                                    <div class="col-xl-8">
                                        <!-- Account details card-->
                                        <div class="card mb-4">
                                            <div class="card-header">{{ __('Account details') }}</div>
                                            <div class="card-body">
                                                @if (\Session::has('warning'))
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            <li>{{ \Session::get('warning') }}</li>
                                                        </ul>
                                                    </div>
                                                @endif
                                                <label for="dni">{{ __('To write') }} DNI</label>
                                                <div class="input-group">
                                                    <input type="number" min="1" max="99999999" id="dni"
                                                        class="form-control" placeholder="{{ __('Document') }}" />&nbsp;
                                                    <button class="btn btn-primary" id="buscardni" align="right"
                                                        onClick="consultarDni()">{{ __('Search') }}</button>
                                                </div>
                                                <form action="{{ route('usuario.store') }}" method="post"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <!--search-->
                                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end py-2 px-4">
                                                    </div>
                                                    <!-- Form Group (username)-->
                                                    <div class="row gx-3 mb-3">
                                                        <!-- Form Group (DNI)-->
                                                        <div class="col-md-6">
                                                            <label class="small mb-1" for="inputDNI">DNI</label>
                                                            <input class="form-control" name="dni" id="dni_ciudadano"
                                                                type="text" placeholder="DNI" readonly />
                                                        </div>
                                                        <!-- Form Group (name)-->
                                                        <div class="col-md-6">
                                                            <label class="small mb-1"
                                                                for="inputName">{{ __('Name') }}</label>
                                                            <input class="form-control" name="nombre" id="nombres"
                                                                type="text" placeholder="{{ __('Name') }}"
                                                                readonly />
                                                        </div>
                                                    </div>
                                                    <!-- Form Row-->
                                                    <div class="row gx-3 mb-3">
                                                        <!-- Form Group (last name)-->
                                                        <div class="col-md-6">
                                                            <label class="small mb-1" for="inputFirstName">
                                                                {{ __('Fathers last name') }}</label>
                                                            <input class="form-control" name="apellido_paterno"
                                                                id="apellido_paterno" type="text"
                                                                placeholder="{{ __('Fathers last name') }}" readonly />
                                                        </div>
                                                        <!-- Form Group (last name)-->
                                                        <div class="col-md-6">
                                                            <label class="small mb-1"
                                                                for="inputLastName">{{ __('Mothers last name') }}</label>
                                                            <input class="form-control" name="apellido_materno"
                                                                id="apellido_materno" type="text"
                                                                placeholder="{{ __('Mothers last name') }}" readonly />
                                                        </div>
                                                    </div>
                                                    <div class="row gx-3 mb-3">
                                                        <div class="col-md-6">
                                                            <label class="small mb-1" for="inputEmail">
                                                                {{ __('Mail') }}</label>
                                                            <input class="form-control" name="correo" id="inputEmail"
                                                                type="text" placeholder="example@rayosac.com" />
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="small mb-1"
                                                                for="inputTelephone">{{ __('Telephone') }}</label>
                                                            <input class="form-control" name="telefono" id="inputTelephone"
                                                                type="number" placeholder="9208033951" />
                                                        </div>
                                                    </div>
                                                    <div class="row gx-3 mb-3">
                                                        <div class="col-md-6">
                                                            <label class="small mb-1"
                                                                for="inputRol">{{ __('Role') }}</label>
                                                            <select id="id_role" name="idrol" class="form-control">
                                                                <option>------Seleccionar------</option>
                                                                @foreach ($roles as $role)
                                                                    <option value="{{ $role->id }}">
                                                                        {{ $role->nombre }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="small mb-1"
                                                                for="inputPassword">{{ __('Password') }}</label>
                                                            <input class="form-control" name="password" id="inputPassword"
                                                                type="password" placeholder="***********" />
                                                        </div>
                                                    </div>
                                                    <div class="row gx-3 mb-3">
                                                        <div class="col-md-6">
                                                            <label class="small mb-1"
                                                                for="inputUser">{{ __('User') }}</label>
                                                            <input class="form-control" name="usuario" id="inputUser"
                                                                type="text" placeholder="{{ __('User') }}" />
                                                        </div>
                                                    </div>
                                            </div>

                                            <div class="text-center">
                                                <!-- Save changes button-->
                                                <button class="btn btn-primary" type="submit"><em
                                                        class='bx bxs-memory-card'></em>{{ __('Save') }} </button>
                                                <!-- cancel changes button-->
                                                <form action="{{ route('usuario.index') }}" method="POST">
                                                    <a class="btn btn-primary me-md-2"
                                                        href="{{ route('usuario.index') }}"
                                                        onclick="return confirm('seguro que desea cancelar?');"><em
                                                            class='bx bxs-left-arrow-square'></em> {{ __('Cancel') }}</a>
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
