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
                            {{ __('Burden data') }}
                        </div>
                        <div class="card-body">
                            <br>
                            @if (\Session::has('warning'))
                                <div class="alert alert-danger">
                                    <ul>
                                        <li>{{ \Session::get('warning') }}</li>
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('carga.update', $carga) }}" method="post" enctype="multipart/form-data">
                                {{ method_field('PATCH') }}
                                @csrf
                                <div class="row g-3 px-6">
                                    <h6>{{ __('Additional Cargo Details') }}</h6>
                                    <div class="row gx-3 mb-3">
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputDetailsBurden">{{ __('load code') }}</label>
                                            <input class="form-control" id="inputDetailsBurden" name="codigo"
                                                type="number" placeholder="****" value="{{ $carga->codigo }}" />
                                        </div>

                                        <div class="col-md-6">
                                            <label class="small mb-1"
                                                for="inputDetailsBurden">{{ __('Burden cost') }}</label>
                                            <input class="form-control" id="inputDetailsBurden" type="number"
                                                placeholder="S/." name="costo" value="{{ $carga->costo }}" />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="small mb-1"
                                                for="inputCostBurden">{{ __('Burden description') }}</label>
                                            <input class="form-control" id="inputCostBurden" type="text" placeholder=""
                                                name="descripcion" value="{{ $carga->descripcion }}" />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="small mb-1"
                                                for="inputDetailsBurden">{{ __('Weight of the load') }}</label>
                                            <input class="form-control" id="inputDetailsBurden" type="number"
                                                placeholder="***T" name="peso" value="{{ $carga->peso }}" />
                                        </div>

                                        <div class="col-md-6">
                                            <br>
                                            <h6 class="small mb-1" for="inputRol">{{ __('Select vehicle') }}</h6>
                                            <select id="id_vehiculo" name="vehiculos_id" class="form-control"
                                                style="color: #C1BEBE;">
                                                <option>{{ __('Select') }}</option>
                                                @foreach ($vehiculo as $vehi)
                                                    <option value="{{ $vehi->id }}">{{ $vehi->marca }}
                                                        {{ $vehi->capacidad_carga }} toneladas</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <br>
                                <div class="text-center">
                                    <!-- Save changes button-->
                                    <button class="btn btn-primary" type="submit"><em
                                            class='bx bx-check'></em>{{ __('Save') }}
                                    </button>
                                    <!-- cancel changes button-->
                                    <form action="{{ route('carga.index') }}" method="POST">
                                        <a class="btn btn-primary me-md-2" href="{{ route('carga.index') }}"
                                            onclick="return confirm('seguro que desea cancelar la edicion?');"><em
                                                class='bx bxs-left-arrow-square'></em> {{ __('Cancel') }}</a>
                                        @csrf
                                    </form>
                                </div>
                            </form>
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
@endsection
