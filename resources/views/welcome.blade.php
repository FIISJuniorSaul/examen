<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Empresa de transportes RAYO S.A.C</title>
    <link href="{{ asset('/css/styles.css') }}" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <div class="">
                    <li class="imglogo">
                        <img src="../image/logo.png" alt="" height="30" width="30">
                        <a style="color:#FFFFFF;">RAYO SAC</a>
                    </li>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <div class="dropdown imglogo">
                            <button class="btn dropdown-toggle p-3 mb-2 bg-light text-dark" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false"> <img src="../image/lenguaje.png" alt="" height="15"
                                    width="15"> {{ __('Idiom') }}
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item"
                                        href="{{ route('set_language', ['es']) }}">{{ __('Spanish') }}</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ route('set_language', ['en']) }}">{{ __('English') }}</a></li>
                            </ul>
                        </div>
                        <li class="dropdown imglogo  ">
                            @if (Route::has('login'))
                                <div class="dropdown " >
                                    @auth
                                    @else
                                        <a href="{{ route('login') }}"
                                            class="btn  p-3 mb-2 bg-light text-dark "
                                            href="{{ route('login') }}">{{ __('Login') }} </a>
                                    @endauth
                                </div>
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <main class="py-4">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://www.esan.edu.pe/images/blog/2018/08/29/1500x844-factores-vehiculo-carga.jpg"
                        class="d-block w-100" alt="..." height="600" width="900">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="color:#FFFFFF;" >{{ __('A COMPANY THAT THINKS ABOUT YOU') }}</h5>
                        <p>
                            {{ __('Transporte RAYO S.A.C, our main objective is the satisfaction of our customers,This being a company known nationally in the transport sector burden.Our team of transportation professionals, along with the support of our technicians and operators provide us with personalized support and simulations for each service, managing in the most efficient way any need of our customers..') }}
                            </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://static.retail.autofact.cl/blog/c_url_original.4kmjx7kgtkmztx.jpg"
                        class="d-block w-100" alt="..." height="600" width="900">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="color:#FFFFFF;">{{ __('A COMPANY THAT THINKS ABOUT YOU') }}</h5>
                        <p>{{ __('Transporte RAYO S.A.C, our main objective is the satisfaction of our customers,This being a company known nationally in the transport sector burden.Our team of transportation professionals, along with the support of our technicians and operators provide us with personalized support and simulations for each service, managing in the most efficient way any need of our customers..') }}</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://www.movertis.com/wp-content/uploads/2020/08/Que-tipos-de-camiones-puedes-encontrar-en-el-mercado.jpg"
                        class="d-block w-100" alt="..." height="600" width="900">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="color:#FFFFFF;">{{ __('A COMPANY THAT THINKS ABOUT YOU') }}</h5>
                        <p>{{ __('Transporte RAYO S.A.C, our main objective is the satisfaction of our customers,This being a company known nationally in the transport sector burden.Our team of transportation professionals, along with the support of our technicians and operators provide us with personalized support and simulations for each service, managing in the most efficient way any need of our customers..') }}</p>
                    </div>
                </div>
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
        <br>
        <div class=" text-center vstack gap-3">
            <h2 style="color:#FFFFFF;" class="bg-light text-dark">NUESTROS SERVICIOS</h2>
        </div>
        <br>
        <div class="card-group">

            <div  class="card bg-dark text-light border-light" >
                <div class="card-header text-center">CARGA PESADA</div>
                <div class="card-body">
                    <img src="https://elbuho.pe/wp-content/uploads/2022/03/transportistas-carga-pesada.jpg" alt="0"
                    height="200" width="405">
                    <p> <br></p>
                    <hr class="mt-0 mb-4" />
                    <p  style="text-align: justify" class="card-text ">Transporte de carga completa a nivel nacional en vehículos desde
                        4-10-15 TN..</p>
                </div>
              </div>
            <div  class="card bg-dark text-light border-light" >
                <div class="card-header text-center">A NIVEL NACIONAL</div>
                <div class="card-body">
                    <img src="image/nacional.jpg" alt="0" height="200" width="405">
                    <p> <br></p>
                    <hr class="mt-0 mb-4" />
                    <p  style="text-align: justify" class="card-text ">Expresos a nivel nacional.
                        Transporte de paquetería y mercancía en general..</p>
                </div>
              </div>
            <div class="card bg-dark text-light border-light" >
                <div class="card-header text-center">MUDANZAS</div>
                <div class="card-body">
                    <img src="https://gilmovers.com.pe/wp-content/uploads/1.png" alt="0" height="200"
                    width="405">
                    <p> <br></p>
                    <hr class="mt-0 mb-4" />
                    <p  style="text-align: justify" class="card-text ">Mudanzas departamentos, casas, oficinas, locales e interprovinciales. Embalaje, reposición, montaje, desmontaje.</p>
                </div>
              </div>
        </div>



        <!-- paginacion final -->

        </div>
    </main>
    <div class="p-3 mb-2 bg-dark text-white">
        <h1 class="text-white"> Acerca de nosotros</h1>

        <h4 class="text-white">Siguenos en <em type="button" class='bx bxl-facebook-square'></em>
            <em type="button" class='bx bxl-instagram-alt'></em> <em type="button" class='bx bxl-youtube'></em>
        </h4>
        <h4 class="text-white"> Contactenos <em type="button" class='bx bxl-messenger'></em> <em type="button"
                class='bx bxl-whatsapp'></em></h4>
        <div>
            <h4 class="text-white"><em class='bx bxs-phone-call'></em> Llamanos al (928033951) </h4>
            <h5 class="text-white"> De lunes a domingo de 8:00 am a 6:00 pm </h5>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
</body>

</html>
