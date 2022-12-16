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
                            {{ __('Vehicle edit') }}
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
                            <form action="{{route('incidente.update', $incidente)}}" method="post" enctype="multipart/form-data">
                                {{method_field('PATCH')}}
                                @csrf
                                <h2>{{ __('incidente data') }}</h2>
                                <div class="row g-3 px-6">
                                    <div class="col">
                                        <h5>{{ __('descripticion del incidente') }}</h5>
                                        <input type="text" class="form-control" placeholder="" value="{{$incidente->descripcion}}" name="descripcion">

                                    </div>
                                    <div class="col">
                                        <h5>{{ __('Estado del indicente') }}</h5>
                                        <input type="text" class="form-control" placeholder="" value="{{$incidente->estado}}" name="estado">

                                    </div>
                                    <div class="col">
                                        <h5>{{ __('Valoracion ') }}</h5>
                                        <select class="form-select" aria-label="Default select example" name="valoracion">
                                            <option disabled>{{ __('Select') }}</option>
                                            <option value="TRAFICO MUY BAJO">1</option>
                                            <option value="TRAFICO BAJO ">2</option>
                                            <option value="TRAFICO REGULAR">3</option>
                                            <option value="TRAFICO NORMAL">4</option>
                                            <option value="TRAFICO MAS DE LO  NORMAL">5</option>
                                            <option value="TRAFICO MAS DE LO HABITUAL">6</option>
                                            <option value="TRAFICO CONGESTIONADO">7</option>
                                            <option value="TRAFICO INTRASITABLE">8</option>
                                            <option value="TRAFICO PESADO">9</option>
                                            <option value="TRAFICO TERIBLE">10</option>
                                        </select>

                                    </div>

                                </div>
                                <div class="row g-3 px-6">

                                    <div class="col-md-6">
                                    <h5>{{ __('Designate Driver') }}</h5>
                                        <select id="user_id" name="user_id" class="form-control" style="color: #C1BEBE;">
                                            <option>{{ __('Select') }}</option>
                                            @foreach($usuarios as $user)
                                                @if ($user->idrol ==1)
                                                <option value="{{ $user->id }}" >{{ $user->persona->nombre}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <br>
                                    <button class="btn btn-primary me-md-2" type="submit"><em class='bx bx-check'></em>{{ __('Save') }}</button>
                                    <form action="{{route('incidente.index')}}" method="POST">
                                        <a class="btn btn-primary me-md-2" href="{{route('incidente.index')}}" onclick="return confirm('seguro que desea cancelar la edicion?');"><em class='bx bxs-left-arrow-square'></em> {{ __('Cancel') }}</a>
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
