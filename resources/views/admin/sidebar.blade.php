
<div id="layoutSidenav_nav">
    <nav class="sidenav shadow-right sidenav-light">
        <!-- Sidenav Footer-->

        <div class="card-body text-center">
            <div class="sidenav-footer">
                <div class="sidenav-footer-content">
                    <div class="avatar avatar-online avatar-xxl">
                        <img class="avatar-img  img-fluid" src="{{asset('image/avatar.png')}}" alt="">
                    </div>
                    <div class="sidenav-footer-subtitle text-center">{{ __('connected as') }}</div>
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
                        {{ __('Initiation') }}
                    </a>
                </li>

                <!-- Sidenav Menu Heading (admin)-->
                <div class="sidenav-menu-heading">{{ __('Administration') }}</div>
                <!-- Sidenav Link (Home)-->
                <a class="nav-link collapsed" href="!" data-bs-toggle="collapse"
                    data-bs-target="#collapseConfiguration" aria-expanded="false" aria-controls="collapseConfiguration">
                    <div class="nav-link-icon"><em class='bx bx-cog'></em></div>
                    {{ __('Configuration') }}
                    <div class="sidenav-collapse-arrow"><em class='bx bx-chevron-down'
                            style="color:gray; font-size:16px;"></em></div>
                </a>
                <div class="collapse" id="collapseConfiguration" data-bs-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                        <li class="nav-item">
                            <a class="nav-link separado" href="{{route('usuario.index')}}"><em
                                    class='bx bxs-user'></em> {{ __('User') }}</a>

                            <a class="nav-link" href="/admin/configuracion/infoempresa"><em
                                    class='bx bxs-info-circle'></em>{{ __('Company information') }}</a>
                        </li>
                    </nav>
                </div>
                <!-- Sidenav Link (About)-->
                <a class="nav-link collapsed" data-bs-toggle="collapse"
                    data-bs-target="#collapseOperation" aria-expanded="false" aria-controls="collapseOperation">
                    <div class="nav-link-icon"><em class='bx bx-line-chart'></em></div>
                    {{ __('Operations') }}
                    <div class="sidenav-collapse-arrow"><em class='bx bx-chevron-down'
                            style="color:gray; font-size:16px;"></em></div>
                </a>
                <div class="collapse" id="collapseOperation" data-bs-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('incidente.index')}}"> <em class='bx bxs-truck'></em>{{ __('Incidente') }}</a>
                            <a class="nav-link" href="{{route('ubicacion.index')}}"><em class='bx bxs-package'></em>{{ __('Ubicacion') }}</a>
                        </li>
                    </nav>
                </div>
                <li class="nav-item mt-2">
                    <a class="nav-link" href="/admin/principal/main">
                        <div class="nav-link-icon"><em class='bx bx-info-circle'></em></div>
                        {{ __('About us') }}
                    </a>
                </li>
                <!-- Divider -->
                <hr class="sidebar-divider">
            </div>
        </div>

    </nav>
</div>

