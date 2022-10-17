<div id="layoutSidenav_nav">
    <nav class="sidenav shadow-right sidenav-light">
        <!-- Sidenav Footer-->
        <div class="card-body text-center">
            <div class="sidenav-footer">
                <div class="sidenav-footer-content">
                    <div class="avatar avatar-xxl">
                        <img class="avatar-img img-fluid" src="{{asset('image/avatar.png')}}" alt="">
                    </div>
                    <div class="sidenav-footer-subtitle text-center">Conectado como:</div>
                    <div class="sidenav-footer-title text-center">{{ Auth::user()->usuario }}</div>
                </div>
            </div>
        </div>
        <div class="sidenav-menu">
            <div class="nav accordion" id="accordionSidenav">
                <!-- Sidenav Link (Dashboard)-->
                <li class="nav-item mt-2">
                    <a class="nav-link active" href="/admin/main">
                        <div class="nav-link-icon"><em class='bx bx-home'></em></div>
                        Inicio
                    </a>
                </li>
                <!-- Sidenav Menu Heading (admin)-->
                <div class="sidenav-menu-heading">Administacion</div>
                <!-- Sidenav Link (Home)-->
                <a class="nav-link collapsed" href="!" data-bs-toggle="collapse"
                    data-bs-target="#collapseConfiguration" aria-expanded="false" aria-controls="collapseConfiguration">
                    <div class="nav-link-icon"><em class='bx bx-cog'></em></div>
                    Configuración
                    <div class="sidenav-collapse-arrow"><em class='bx bx-chevron-down'
                            style="color:gray; font-size:16px;"></em></div>
                </a>
                <div class="collapse" id="collapseConfiguration" data-bs-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                        <li class="nav-item">
                            <a class="nav-link separado" href="{{route('usuario.index')}}"><em
                                    class='bx bxs-user'></em> Usuario</a>

                            <a class="nav-link" href="/admin/configuracion/infoempresa"><em
                                    class='bx bxs-info-circle'></em>Informacion de la empresa</a>
                        </li>
                    </nav>
                </div>
                <!-- Sidenav Link (About)-->
                <a class="nav-link collapsed" data-bs-toggle="collapse"
                    data-bs-target="#collapseOperation" aria-expanded="false" aria-controls="collapseOperation">
                    <div class="nav-link-icon"><em class='bx bx-line-chart'></em></div>
                    Operaciones
                    <div class="sidenav-collapse-arrow"><em class='bx bx-chevron-down'
                            style="color:gray; font-size:16px;"></em></div>
                </a>
                <div class="collapse" id="collapseOperation" data-bs-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                        <li class="nav-item">
                            <a class="nav-link" href="/admin/operaciones/vehiculos"> <em class='bx bxs-truck'></em>Vehiculos</a>
                            <a class="nav-link" href="/admin/rutasdestino"><em class='bx bx-trip'></em>Rutas</a>


                            <a class="nav-link" href="/admin/operaciones/clientes"> <i class='bx bx-directions'></i>clientes</a>


                            <a class="nav-link" href="/admin/operaciones/cotizar"><em class='bx bx-dollar-circle'></em>Cotizar</a>



                        </li>
                    </nav>
                </div>
                <li class="nav-item mt-2">
                    <a class="nav-link" href="/admin/principal/main">
                        <div class="nav-link-icon"><em class='bx bx-info-circle'></em></div>
                        Acerca de nosotros
                    </a>
                </li>




                <!-- Divider -->
                <hr class="sidebar-divider">
            </div>
        </div>

    </nav>
</div>
