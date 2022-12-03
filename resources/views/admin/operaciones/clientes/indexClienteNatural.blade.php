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
                                    {{ __('OUR CLIENTS') }}
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-body page-body-light pt-3 px-2">
                    <div class="card card-header-actions">
                        <div class="card-header">
                            {{ __('Clients/ Data in the table') }}
                            <div>
                                <a href="{{route('clienteNatural.create')}}" class="btn btn-primary lift"><em class='bx bx-trip'></em>{{ __('Nuevo cliente') }}</a>
                            </div>

                        </div>
                        <div>
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                  <a class="nav-link " aria-current="page" href="{{route('clienteJuridico')}}">{{ __('Legal Clients') }}</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link  active" href="{{route('clienteNatural')}}">{{ __('Natural Clients') }}</a>
                                </li>
                              </ul>
                        </div>

                        <div class="card-body py-2">
                            <table class="table table-sm table-bordered table-hover " id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>{{ __(' DNI number') }}</th>
                                        <th>{{ __('Names') }}</th>
                                        <th>{{ __('Fathers last name') }}</th>
                                        <th>{{ __('Mothers last name') }}</th>
                                        <th>{{ __('Email') }} </th>
                                        <th>{{ __('Telephone') }}</th>
                                        <th>{{ __('Actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>202203045</td>
                                        <td>Fiorela</td>
                                        <td>Zambrano</td>
                                        <td>Nazario</td>
                                        <td>fiorela@gmail.com</td>
                                        <td>930959507</td>
                                        <td>


                                        </td>

                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
