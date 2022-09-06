<div id="layoutSidenav_nav">
    <nav class="sidenav shadow-right sidenav-light">
        <!-- Sidenav Footer-->
        <div class="card-body text-center">
            <div class="sidenav-footer">
                <div class="sidenav-footer-content">
                    <div class= "avatar avatar-xxl">
                        <img class="avatar-img img-fluid" src="../image/avatar.png" alt="">
                    </div>
                    <div class="sidenav-footer-subtitle text-center">Conectado como:</div>
                    <div class="sidenav-footer-title text-center">{{Auth::user()->name}}</div>
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
                <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseConfiguration" aria-expanded="false" aria-controls="collapseConfiguration">
                    <div class="nav-link-icon"><em class='bx bx-cog'></em></div>
                    Configuración
                    <div class="sidenav-collapse-arrow"><em class='bx bx-chevron-down' style="color:gray; font-size:16px;"></em></div>
                </a>
                <div class="collapse" id="collapseConfiguration" data-bs-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                        <li class="nav-item">
                            <a class="nav-link" href="/admin/configuracion/usuario"><em class='bx bxs-user'></em>  Usuario</a>
                            <a class="nav-link" href="/admin/configuracion/roles"><em class='bx bxs-key'></em>Roles/Permiso</a>
                            <a class="nav-link" href="/admin/configuracion/infoempresa"><em class='bx bxs-info-circle' ></em>Informacion de la empresa</a>
                        </li>
                    </nav>
                </div>
                <!-- Sidenav Link (About)-->
                            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseOperation" aria-expanded="false" aria-controls="collapseOperation">
                                <div class="nav-link-icon"><em class='bx bx-line-chart-down'></em></div>
                                Operaciones
                                <div class="sidenav-collapse-arrow"><em class='bx bx-chevron-down' style="color:gray; font-size:16px;"></em></div>
                            </a>
                            <div class="collapse" id="collapseOperation" data-bs-parent="#accordionSidenav">
                                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                                    <li class="nav-item">
                                        <a class="nav-link" href="/admin/operaciones/vehiculos">Vehiculos</a>
                                        <a class="nav-link" href="#">Rutas</a>
                                        <a class="nav-link" href="#">Clientes</a>
                                        <a class="nav-link" href="#">Cotizar</a>
                                    </li>
                                </nav>
                            </div>


                <!-- Sidenav Link (Fcturación-->
                <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseFacturation" aria-expanded="false" aria-controls="collapseFacturation">
                    <div class="nav-link-icon"><em class='bx bxs-file'></em></div>
                    Facturación
                    <div class="sidenav-collapse-arrow"><em class='bx bx-chevron-down' style="color:gray; font-size:16px;"></em></div>
                </a>
                <div class="collapse" id="collapseFacturation" data-bs-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                        <li class="nav-item">
                            <a class="nav-link" href="#">ver factura </a>


                        </li>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseReport" aria-expanded="false" aria-controls="collapseReport">
                    <div class="nav-link-icon"><em class='bx bxs-report'></em></div>
                    Reportes
                    <div class="sidenav-collapse-arrow"><em class='bx bx-chevron-down' style="color:gray; font-size:16px;"></em></div>
                </a>
                <div class="collapse" id="collapseReport" data-bs-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Vehiculo</a>
                            <a class="nav-link" href="#">Rutas</a>
                            <a class="nav-link" href="#">Clientes</a>
                            <a class="nav-link" href="#">Usuarios</a>

                        </li>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseHelp" aria-expanded="false" aria-controls="collapseHelp">
                    <div class="nav-link-icon"><em class='bx bxs-help-circle' ></em></div>
                    Ayuda
                    <div class="sidenav-collapse-arrow"><em class='bx bx-chevron-down' style="color:gray; font-size:16px;"></em></div>
                </a>
                <div class="collapse" id="collapseHelp" data-bs-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Acerca de nosotros</a>
                        </li>
                    </nav>
                </div>
                <!-- Divider -->
                <hr class="sidebar-divider">
            </div>
        </div>

    </nav>
</div>
