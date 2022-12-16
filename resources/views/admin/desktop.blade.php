@extends('layouts.config')
@section('content')
    @include('admin.header')

    <div id="layoutSidenav">
        @include('admin.sidebar')
        <div id="layoutSidenav_content">
            <main>
                <div class="page-header page-header-dark bg-gradient-primary-to-secondary  mt-1">
                    <div class="page-header-content">
                        <div class="row justify-content-between">
                            <div class="col-12 col-xl-auto">

                            </div>
                            <div class="col-12 col-xl-auto">
                                <h1 class="page-title">
                                    {{ __('Welcome') }}
                                </h1>
                            </div>
                            <div class="col-12 col-xl-auto">
                                <div class="fechaHora">
                                    <span id="current_date"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Main page content-->
                <div class="page-body page-body-dark pt-3">
                    <!-- Example Colored Cards for Dashboard Demo-->
                    <div class="page-body-dark card-header-actions">
                        <img src="https://th.bing.com/th/id/R.afde19e1194072c4550c2891c6c138e7?rik=IrI%2ftprVrM8VIQ&pid=ImgRaw&r=0" alt="">

                    </div>
                    <!-- Example Charts for Dashboard Demo-->

                </div>
            </main>
            <hr>
            <footer class="footer-admin mt-auto footer-light">
                <div class="container-xl px-4">
                    <div class="row">
                        <div class="col-md-6 small">{{ __('Copyright') }} © {{ __('Your') }} {{ __('Website') }} 2022</div>
                        <div class="col-md-6 text-md-end small">
                            <a href="#!">{{ __('Privacy Policy') }}</a>
                            ·
                            <a href="#!">{{ __('Terms') }} &amp; {{ __('Conditions') }}</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection
