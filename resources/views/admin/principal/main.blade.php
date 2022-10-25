@extends('layouts.config')
@section('content')
    <div id="#">
        <div id="layoutSidenav_content">
            <main>
                <nav class="topnav navbar navbar-expand shadow justify-content-between justify-content-sm-start navbar-light bg-white"
                    id="sidenavAccordion">
                    <!-- Navbar Brand-->
                    <!-- * * Tip * * You can use text or an image for your navbar brand.-->
                    <!-- * * * * * * When using an image, we recommend the SVG format.-->
                    <!-- * * * * * * Dimensions: Maximum height: 32px, maximum width: 240px-->
                    <a class="navbar-brand pe-3 ps-4 ps-lg-4" href="/admin/main">Rayo SAC</a>
                    <!-- Sidenav Toggle Button-->
                    <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 me-2" id="sidebarToggle"><i
                            class='bx bx-menu menu-list'></i></button>
                    <!-- Navbar Items-->
                    <ul class="navbar-nav align-items-center ms-auto">
                        <!-- Lenguaje-->
                        <li class="nav-item dropdown no-caret d-none d-sm-block me-2 dropdown-notifications">
                            <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownAlerts"
                                href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" title="Lenguaje"><i class='bx bx-world'></i></a>
                            <div class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up"
                                aria-labelledby="navbarDropdownAlerts">
                                <h6 class="dropdown-header dropdown-notifications-header">
                                    <i class='bx bx-world'></i>
                                    Lenguaje
                                </h6>

                                <!-- Example Alert 1-->
                                <a class="dropdown-item dropdown-notifications-item" href="#!">
                                    <div class="dropdown-notifications-item-icon bg-warning"><i class='bx bx-world'></i>
                                    </div>
                                    <div class="dropdown-notifications-item-content">
                                        <div class="dropdown-notifications-item-content-details">Español</div>
                                    </div>
                                </a>
                                <a class="dropdown-item dropdown-notifications-item" href="#!">
                                    <div class="dropdown-notifications-item-icon bg-warning"><i class='bx bx-world'></i>
                                    </div>
                                    <div class="dropdown-notifications-item-content">
                                        <div class="dropdown-notifications-item-content-details">inglés</div>
                                    </div>
                                </a>

                            </div>
                        </li>

                        <li class="nav-item dropdown no-caret d-none d-sm-block me-2 dropdown-notifications">
                            <a class="#" id="navbarDropdownAlerts" href="javascript:void(0);" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Lenguaje">Inicia
                                sesiön</a>

                        </li>


                        </li>
                    </ul>
                </nav>
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="https://imgs.search.brave.com/Q_VVZd-bEb3yqq2vbt0_1mVfyHs8pX2UyMYDfUisF-E/rs:fit:647:225:1/g:ce/aHR0cHM6Ly90c2Uy/Lm1tLmJpbmcubmV0/L3RoP2lkPU9JUC5a/ZHlxNlZPOHUwSnNE/X2xldzJJUVl3SGFG/YiZwaWQ9QXBp" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://imgs.search.brave.com/m8e0erJqyyvgCgidFXfVc-GzIH1j4yiuuV34fcahdtE/rs:fit:841:225:1/g:ce/aHR0cHM6Ly90c2Ux/Lm1tLmJpbmcubmV0/L3RoP2lkPU9JUC5C/NWRlY2lZc1BoN3d1/amQ2amFTTDB3SGFF/TCZwaWQ9QXBp" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://imgs.search.brave.com/JPpxdprpj_gxqgM1TSwEdCjzKF-S3bCDv5xHhv6nxoI/rs:fit:1012:225:1/g:ce/aHR0cHM6Ly90c2Uy/Lm1tLmJpbmcubmV0/L3RoP2lkPU9JUC50/LWVtUExidnJxbml4/RHdSbnE4RW5nSGFE/ZSZwaWQ9QXBp" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>

                  <div class="card-group">
                    <div class="card">
                      <img src="..." class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                    <div class="card">
                      <img src="..." class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                    <div class="card">
                      <img src="..." class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                  </div>


                  <!-- paginacion final -->
                  <div class="p-3 mb-2 bg-dark text-white">
                    <h1 class="text-white"> Acerca de nosotros</h1>

                    <h4 class="text-white" >Siguenos en <em type="button" class='bx bxl-facebook-square' ></em> <em type="button" class='bx bxl-instagram-alt' ></em> <em type="button" class='bx bxl-youtube' ></em></h4>
                    <h4 class="text-white"> Contactenos <em type="button" class='bx bxl-messenger'></em> <em type="button" class='bx bxl-whatsapp' ></em></h4>
                    <div  >
                        <h4 class="text-white" ><em class='bx bxs-phone-call' ></em> Llamanos al (928033951)     </h4>
                        <h5 class="text-white"> De lunes a domingo de 8:00 am a 6:00 pm </h5>
                    </div>

                </div>
            </main>

        </div>

    </div>

@endsection
