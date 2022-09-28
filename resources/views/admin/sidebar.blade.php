<div id="layoutSidenav_nav">
    <nav class="sidenav shadow-right sidenav-light">
        <!-- Sidenav Footer-->
        <div class="card-body text-center">
            <div class="sidenav-footer">
                <div class="sidenav-footer-content">
                    <div class="avatar avatar-xxl">
                        <img class="avatar-img img-fluid" src="../image/avatar.png" alt="">
                    </div>
                    <div class="sidenav-footer-subtitle text-center">Conectado como:</div>
                    <div class="sidenav-footer-title text-center">{{ Auth::user()->name }}</div>
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
                            <a class="nav-link" href="/admin/configuracion/roles"><em
                                    class='bx bxs-key'></em>Roles/Permiso</a>
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
                            <a class="nav-link" href="/admin/operaciones/rutas"><em class='bx bx-trip'></em>Rutas</a>

                            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                                data-bs-target="#collapseCliente" aria-expanded="false" aria-controls="collapseCliente">
                                <div class="nav-link-icon"><em class='bx bx-line-chart'></em></div>
                                Clientes
                                <div class="sidenav-collapse-arrow"><em class='bx bx-chevron-down'
                                        style="color:gray; font-size:16px;"></em></div>
                            </a>

                            <div class="collapse" id="collapseCliente">
                                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                                    <a class="nav-link" href="/admin/operaciones/clientes/empresa"> <em class='bx bxs-truck'></em>Clientes-Empresa</a>

                                </nav>
                            </div>

                            <a class="nav-link" href="/admin/operaciones/cotizar"><em class='bx bx-dollar-circle'></em>Cotizar</a>



                        </li>
                    </nav>
                </div>


                <!-- Sidenav Link (Fcturación-->
                <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                    data-bs-target="#collapseFacturation" aria-expanded="false" aria-controls="collapseFacturation">
                    <div class="nav-link-icon"><em class='bx bxs-file'></em></div>
                    Facturación
                    <div class="sidenav-collapse-arrow"><em class='bx bx-chevron-down'
                            style="color:gray; font-size:16px;"></em></div>
                </a>
                <div class="collapse" id="collapseFacturation" data-bs-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                        <li class="nav-item">
                            <a class="nav-link" href="/admin/facturacion/factura"><em class='bx bx-receipt'></em>ver
                                factura </a>
                        </li>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                    data-bs-target="#collapseReport" aria-expanded="false" aria-controls="collapseReport">
                    <div class="nav-link-icon"><em class='bx bxs-report'></em></div>
                    Reportes
                    <div class="sidenav-collapse-arrow"><em class='bx bx-chevron-down'
                            style="color:gray; font-size:16px;"></em></div>
                </a>
                <div class="collapse" id="collapseReport" data-bs-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                        <li class="nav-item">
                            <a class="nav-link" href="/admin/reportes/vehiculoReport"><em class='bx bxs-truck'></em>Vehiculo</a>
                            <a class="nav-link" href="/admin/reportes/rutaReport"><em class='bx bx-trip'></em>Rutas</a>
                            <a class="nav-link" href="/admin/reportes/clienteReport"><em class='bx bx-group'></em>Clientes</a>
                            <a class="nav-link" href="/admin/reportes/usuarioReport"><em class='bx bxs-user'></em>Usuarios</a>

                        </li>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                    data-bs-target="#collapseHelp" aria-expanded="false" aria-controls="collapseHelp">
                    <div class="nav-link-icon"><em class='bx bxs-help-circle'></em></div>
                    Ayuda
                    <div class="sidenav-collapse-arrow"><em class='bx bx-chevron-down'
                            style="color:gray; font-size:16px;"></em></div>
                </a>
                <div class="collapse" id="collapseHelp" data-bs-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                        <li class="nav-item">
                            <a class="nav-link" href="/admin/ayuda/acercanosostros"><em class='bx bx-info-circle'></em>Acerca de nosotros</a>
                        </li>
                    </nav>
                </div>
                <!-- Divider -->
                <hr class="sidebar-divider">
            </div>
        </div>

    </nav>
</div>
