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
                                    VEHÍCULOS
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-body page-body-light pt-3 px-2">
                    <div class="card card-header-actions">
                        <div class="card-header">
                            Datos del Vehículo
                        </div>
                        <div class="card-body">


                            <br>
                            <form action="{{route('vehiculo.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <h2>Datos del usuario</h2>
                                <div class="row g-3 px-6">
                                    <div class="col">
                                        <h5>Tipo de Vehículo</h5>
                                        <select class="form-select" aria-label="Default select example" name="modelo">
                                            <option selected>A1</option>
                                            <option value="1">A2</option>
                                            <option value="2">A3</option>
                                        </select>

                                    </div>
                                    <div class="col">
                                        <h5>Placa</h5>
                                        <input type="text" class="form-control" placeholder="N° de Placa" name="placa">

                                    </div>

                                </div>

                                <div class="row g-3 px -6">
                                    <div class="col">
                                        <h5>Marca</h5>
                                        <input type="text" class="form-control" placeholder="marca" aria-label="Email" name="marca">
                                    </div>
                                    <div class="col">
                                        <h5>Consumo de Galones/KM</h5>
                                        <div class="input-group mb-3">
                                            <input type="password" class="form-control" placeholder="glns"
                                                aria-label="Recipient's username" aria-describedby="button-addon2" name="consumo_gasolina">

                                        </div>
                                    </div>

                                </div>
                                <div class="row g-3 px-6">
                                    <div class="col">
                                        <h5>Capacidad de Carga</h5>
                                        <input type="text" class="form-control" placeholder="5T" aria-label="telephone" name="capacidad_carga">
                                    </div>
                                    <div class="col-md-6">
                                    <h5>Designar Conductor</h5>
                                        <select id="user_id" name="user_id" class="form-control" style="color: #000;">
                                            <option>------Seleccionar------</option>
                                            @foreach($usuarios as $user)
                                                @if ($user->idrol ==3)
                                                <option value="{{ $user->id }}" >{{ $user->persona->nombre}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>




                                <div class="btn">
                                    <button class="btn btn-primary me-md-2" type="submit"><i
                                            class='bx bxs-user-plus'></i>Guardar</button>
                                    <button class="btn btn-primary" type="submit"><i
                                            class='bx bxs-left-arrow-square'></i>Cancelar</button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
