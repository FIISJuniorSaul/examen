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
                                    {{ __('Vehicles') }}
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-body page-body-light pt-3 px-2">
                    <div class="card card-header-actions">
                        <div class="card-header">
                            {{ __('Vehicle data') }}
                        </div>
                        <div class="card-body">


                            <br>
                            <form action="{{route('vehiculo.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <h2>{{ __('User data') }}</h2>
                                <div class="row g-3 px-6">
                                    <div class="col">
                                        <h5>{{ __('Vehicle Type') }}</h5>
                                        <select class="form-select" aria-label="Default select example" name="modelo">
                                            <option disabled>{{ __('Select') }}</option>
                                            <option value="A1">A1</option>
                                            <option value="A2">A2</option>
                                            <option value="A3">A3</option>
                                        </select>

                                    </div>
                                    <div class="col">
                                        <h5>{{ __('License plate') }}</h5>
                                        <input type="text" class="form-control" placeholder="" name="placa">

                                    </div>

                                </div>

                                <div class="row g-3 px -6">
                                    <div class="col">
                                        <h5>{{ __('Brand') }}</h5>
                                        <input type="text" class="form-control" placeholder="" aria-label="Email" name="marca">
                                    </div>
                                    <div class="col">
                                        <h5>{{ __('Consumption of Gallons/KM') }}</h5>
                                        <div class="input-group mb-3">
                                            <input type="number" class="form-control" placeholder=""
                                                aria-label="Recipient's username" aria-describedby="button-addon2" name="consumo_gasolina">

                                        </div>
                                    </div>

                                </div>
                                <div class="row g-3 px-6">
                                    <div class="col">
                                        <h5>{{ __('Loading capacity') }}</h5>
                                        <input type="number" class="form-control" placeholder="" aria-label="telephone" name="capacidad_carga">
                                    </div>
                                    <div class="col-md-6">
                                    <h5>{{ __('Designate Driver') }}</h5>
                                        <select id="user_id" name="user_id" class="form-control" style="color: #C1BEBE;">
                                            <option>{{ __('Select') }}</option>
                                            @foreach($usuarios as $user)
                                                @if ($user->idrol ==3)
                                                <option value="{{ $user->id }}" >{{ $user->persona->nombre}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>




                                <div class="text-center">
                                    <br>
                                    <button class="btn btn-primary me-md-2" type="submit"><em class='bx bx-check'></em>{{ __('Save') }}</button>
                                    <button class="btn btn-primary" type="submit"><i
                                            class='bx bxs-left-arrow-square'></i>{{ __('Cancel') }}</button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
