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
                                <h1 class="page-title">
                                    DASHBOARD
                                </h1>
                            </div>
                            <div class="col-12 col-xl-auto">
                                <h1 class="page-title">
                                    BIENVENIDO
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
                        <img src="https://imgs.search.brave.com/EVoiDQDOG6U2k8RvF_D2mLV-g2ZjhGa3tJ1lH1EBLC4/rs:fit:1200:1200:1/g:ce/aHR0cHM6Ly9ibG9n/LnRwcy5jb20ubXgv/aHViZnMvYmxvZyUy/MHRyYWN0b3MuanBn/I2tlZXBQcm90b2Nv/bA" alt="">
                    </div>
                    <!-- Example Charts for Dashboard Demo-->

                </div>
            </main>
            <hr>
            <footer class="footer-admin mt-auto footer-light">
                <div class="container-xl px-4">
                    <div class="row">
                        <div class="col-md-6 small">Copyright © Your Website 2022</div>
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
