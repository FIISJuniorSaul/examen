@extends('layouts.config')
@section('content')
    <div id="#">
        <div id="layoutSidenav_content">
            <main>
                <nav class="topnav navbar navbar-expand shadow justify-content-between justify-content-sm-start navbar-light bg-white" id="sidenavAccordion">
                    <!-- Navbar Brand-->
                    <!-- * * Tip * * You can use text or an image for your navbar brand.-->
                    <!-- * * * * * * When using an image, we recommend the SVG format.-->
                    <!-- * * * * * * Dimensions: Maximum height: 32px, maximum width: 240px-->
                    <a class="navbar-brand pe-3 ps-4 ps-lg-4" href="/admin/main">Rayo SAC</a>
                    <!-- Sidenav Toggle Button-->
                    <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 me-2" id="sidebarToggle"><i class='bx bx-menu menu-list'></i></button>
                    <!-- Navbar Items-->
                    <ul class="navbar-nav align-items-center ms-auto">
                        <!-- Lenguaje-->
                        <li class="nav-item dropdown no-caret d-none d-sm-block me-2 dropdown-notifications">
                            <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownAlerts" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Lenguaje"><i class='bx bx-world'></i></a>
                            <div class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownAlerts">
                                <h6 class="dropdown-header dropdown-notifications-header">
                                    <i class='bx bx-world'></i>
                                    Lenguaje
                                </h6>

                                <!-- Example Alert 1-->
                                <a class="dropdown-item dropdown-notifications-item" href="#!">
                                    <div class="dropdown-notifications-item-icon bg-warning"><i class='bx bx-world'></i></div>
                                    <div class="dropdown-notifications-item-content">
                                        <div class="dropdown-notifications-item-content-details">Español</div>
                                    </div>
                                </a>
                                <a class="dropdown-item dropdown-notifications-item" href="#!">
                                    <div class="dropdown-notifications-item-icon bg-warning"><i class='bx bx-world'></i></div>
                                    <div class="dropdown-notifications-item-content">
                                        <div class="dropdown-notifications-item-content-details">inglés</div>
                                    </div>
                                </a>

                            </div>
                        </li>

                        <li class="nav-item dropdown no-caret d-none d-sm-block me-2 dropdown-notifications">
                            <a class="#" id="navbarDropdownAlerts" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Lenguaje">Inicia sesiön</a>

                        </li>


                        </li>
                    </ul>
                </nav>
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="https://imgs.search.brave.com/EVoiDQDOG6U2k8RvF_D2mLV-g2ZjhGa3tJ1lH1EBLC4/rs:fit:1200:1200:1/g:ce/aHR0cHM6Ly9ibG9n/LnRwcy5jb20ubXgv/aHViZnMvYmxvZyUy/MHRyYWN0b3MuanBn/I2tlZXBQcm90b2Nv/bA" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://www.movertis.com/wp-content/uploads/2020/08/Que-tipos-de-carga-puedes-encontrar-en-el-transporte-de-mercancias.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://ecoduo.org/wp-content/uploads/2021/02/transporte-de-carga-pesada.png" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </main>
        </div>
    </div>
@endsection
