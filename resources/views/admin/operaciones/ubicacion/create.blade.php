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
                            {{ __('incidente data') }}
                        </div>
                        <div class="card-body">
                            @if (\Session::has('warning'))
                            <div class="alert alert-danger">
                                <ul>
                                    <li>{{ \Session::get('warning') }}</li>
                                </ul>
                            </div>
                        @endif

                            <br>
                            <form action="{{route('ubicacion.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <h2>{{ __('incidente data') }}</h2>
                                <div class="row g-3 px-6">
                                    <div class="col">
                                        <h5>{{ __('DEPARTAMENTO') }}</h5>
                                        <input type="text" class="form-control" placeholder="" name="departamento">

                                    </div>
                                    <div class="col">
                                        <h5>{{ __('PROVINCIA') }}</h5>
                                        <input type="text" class="form-control" placeholder="" name="provincia">

                                    </div>
                                    <div class="col">
                                        <h5>{{ __('DISTRITO') }}</h5>
                                        <input type="text" class="form-control" placeholder="" name="distrito">

                                    </div>
                                    <div class="col">
                                        <h5>{{ __('REFERENCIA') }}</h5>
                                        <input type="text" class="form-control" placeholder="" name="referencia">
                                    </div>

                                </div>
                                <div class="row g-3 px-6">

                                    <div class="col-md-6">
                                    <h5>{{ __('Designate incidente') }}</h5>
                                        <select id="incidente_id" name="incidente_id" class="form-control" style="color: #C1BEBE;">
                                            <option>{{ __('Select') }}</option>
                                            @foreach($incidente as $inci)
                                                <option value="{{ $inci->id }}" >{{ $inci->descripcion}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <br>
                                    <button class="btn btn-primary me-md-2" type="submit" onclick="return confirm('estas  apunto de registrar un vehiculo');"><em class='bx bx-check'></em>{{ __('Save') }}</button>
                                    <form action="{{route('ubicacion.index')}}" method="POST">
                                        <a class="btn btn-primary me-md-2" href="{{route('ubicacion.index')}}" onclick="return confirm('seguro que desea cancelar?');"><em class='bx bxs-left-arrow-square'></em> {{ __('Cancel') }}</a>
                                        @csrf
                                    </form>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
