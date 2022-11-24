<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Empresa de transportes RAYO S.A.C</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" type="text/css" />
    <!--<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>

</head>

<body class="antialiased">

    <div>
        <div id="layoutSidenav_content">
            <main>
                <nav class=" fixed-top topnav navbar navbar-expand  justify-content-between justify-content-sm-start navbar-light bg-white"
                    id="sidenavAccordion">
                    <li class="imglogo">
                        <img src="../image/logo.png" alt="" height="50" width="50">
                        <a class="navbar-brand pe-3 ps-4 ps-lg-4" href="/admin/main">Rayo SAC</a>
                    </li>
                    <ul class="navbar-nav align-items-center ms-auto">
                        <li class="navbar">
                            <div class="sm:items-center ">
                                @if (Route::has('login'))
                                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                        @auth
                                        @else
                                            <a href="{{ route('login') }}"
                                                class="btn btn-login-top bg-gray-100 dark:bg-gray-100 ">Iniciar
                                                sesion</a>
                                        @endauth
                                    </div>
                                @endif
                            </div>
                        </li>
                        <li class=" dropdown-notifications">
                            <a class="imglogo" href="javascript:void(0);" role="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" title="Lenguaje"><i class='imglogo'></i>
                                <img src="../image/lenguaje.png" alt="0" height="40" width="40">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end border-100 shadow animated--fade-in-up"
                                aria-labelledby="navbarDropdownAlerts">
                                <h6 class="dropdown-header dropdown-notifications-header">
                                    <i class='bx bx-world'></i>
                                    Lenguaje
                                </h6>
                                <!-- Example Alert 1-->
                                <a class="dropdown-item dropdown-notifications-item" href="#!">
                                    <div class=" "><i class='bx bx-world'></i>
                                    </div>
                                    <div class="dropdown-notifications-item-content">
                                        <div class="dropdown-notifications-item-content-details">Español</div>
                                    </div>
                                </a>
                                <a class="dropdown-item dropdown-notifications-item" href="#!">
                                    <div class=" "><i class='bx bx-world'></i>
                                    </div>
                                    <div class="dropdown-notifications-item-content">
                                        <div class="dropdown-notifications-item-content-details">inglés</div>
                                    </div>
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://www.esan.edu.pe/images/blog/2018/08/29/1500x844-factores-vehiculo-carga.jpg"
                                class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>UNA EMPRESA QUE PIENSA EN USTED</h5>
                                <p>Transporte RAYO S.A.C, nuestro objetivo principal es la satisfacción de nuestros
                                    clientes,
                                    siendo ésta una empresa conocida a nivel Nacional en el sector de Transporte de
                                    carga.
                                    Nuestro equipo de profesionales en transporte, junto con el apoyo de nuestros
                                    técnicos y operadores nos brinda el soporte personalizado y simulaciones para cada
                                    servicio, gestionando de la manera más eficaz cualquier necesidad de nuestros
                                    clientes..</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://static.retail.autofact.cl/blog/c_url_original.4kmjx7kgtkmztx.jpg"
                                class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>UNA EMPRESA QUE PIENSA EN USTED</h5>
                                <p>Expreso Cargosur E.I.R.L, nuestra objetivo principal es la satisfacción de nuestros
                                    clientes,
                                    siendo ésta una empresa conocida a nivel Nacional en el sector de Transporte de
                                    carga.
                                    Nuestro equipo de profesionales en transporte, junto con el apoyo de nuestros
                                    técnicos y operadores nos brinda el soporte personalizado y simulaciones para cada
                                    servicio, gestionando de la manera más eficaz cualquier necesidad de nuestros
                                    clientes..</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://www.movertis.com/wp-content/uploads/2020/08/Que-tipos-de-camiones-puedes-encontrar-en-el-mercado.jpg"
                                class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>UNA EMPRESA QUE PIENSA EN USTED</h5>
                                <p>Expreso Cargosur E.I.R.L, nuestra objetivo principal es la satisfacción de nuestros
                                    clientes,
                                    siendo gti ésta una empresa conocida a nivel Nacional en el sector de Transporte de
                                    carga.
                                    Nuestro equipo de profesionales en transporte, junto con el apoyo de nuestros
                                    técnicos y operadores nos brinda el soporte personalizado y simulaciones para cada
                                    servicio, gestionando de la manera más eficaz cualquier necesidad de nuestros
                                    clientes..</p>
                            </div>
                        </div>
                    </div>
                    <div class=" text-center vstack gap-3">
                        <div class="bg-dark border">NUESTROS SERVICIOS</div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <div class="card-group">
                    <div class="card">
                        <img src="https://elbuho.pe/wp-content/uploads/2022/03/transportistas-carga-pesada.jpg"
                            alt="0" height="100" width="200">
                        <div class="card-body">
                            <h5 class="card-title">CARGA PESADA </h5>
                            <p class="card-text">Transporte de carga completa a nivel nacional en vehículos desde
                                4-10-15 TN..</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="image/nacional.jpg" alt="0" height="100" width="100">
                        <div class="card-body">
                            <h5 class="card-title"> A NIVEL NACIONAL</h5>
                            <p class="card-text">Expresos a nivel nacional.
                                Transporte de paquetería y mercancía en general..</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="https://gilmovers.com.pe/wp-content/uploads/1.png" alt="0" height="100"
                            width="200">
                        <div class="card-body">
                            <h5 class="card-title">MUDANZAS</h5>
                            <p class="card-text">Mudanzas departamentos, casas, oficinas, locales e interprovinciales.
                                Embalaje, reposición, montaje, desmontaje.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>


                <!-- paginacion final -->
                <div class="p-3 mb-2 bg-dark text-white">
                    <h1 class="text-white"> Acerca de nosotros</h1>

                    <h4 class="text-white">Siguenos en <em type="button" class='bx bxl-facebook-square'></em>
                        <em type="button" class='bx bxl-instagram-alt'></em> <em type="button"
                            class='bx bxl-youtube'></em>
                    </h4>
                    <h4 class="text-white"> Contactenos <em type="button" class='bx bxl-messenger'></em> <em
                            type="button" class='bx bxl-whatsapp'></em></h4>
                    <div>
                        <h4 class="text-white"><em class='bx bxs-phone-call'></em> Llamanos al (928033951) </h4>
                        <h5 class="text-white"> De lunes a domingo de 8:00 am a 6:00 pm </h5>
                    </div>

                </div>
            </main>

        </div>

    </div>

    </div>
</body>

</html>
