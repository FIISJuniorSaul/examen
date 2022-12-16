<nav class="topnav navbar navbar-expand shadow justify-content-between justify-content-sm-start navbar-light bg-white"
    id="sidenavAccordion">
    <!-- Navbar Brand-->
    <!-- * * Tip * * You can use text or an image for your navbar brand.-->
    <!-- * * * * * * When using an image, we recommend the SVG format.-->
    <!-- * * * * * * Dimensions: Maximum height: 32px, maximum width: 240px-->
    <a class="navbar-brand pe-3 ps-4 ps-lg-4" href="/admin/main">INCIDENTE</a>
    <!-- Sidenav Toggle Button-->
    <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 me-2" id="sidebarToggle"><i
            class='bx bx-menu menu-list'></i></button>
    <!-- Navbar Items-->
    <ul class="navbar-nav align-items-center ms-auto">
        <!-- Configuraciones-->

        <div class="dropdown">
            <button class="btn dropdown-toggle p-3 mb-2 bg-light text-dark" type="button" data-bs-toggle="dropdown"
                aria-expanded="false"><img src="../image/lenguaje.png" alt="" height="15" width="15"> {{ __('Idiom') }}
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('set_language', ['es']) }}">{{ __('Spanish') }}</a></li>
                <li><a class="dropdown-item" href="{{ route('set_language', ['en']) }}">{{ __('English') }}</a></li>

            </ul>
        </div>

        <li class="nav-item dropdown no-caret dropdown-user me-2 me-lg-4 dropdown-notifications">
            <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage"
                href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false" title="Cuenta"><em class='bx bxs-user-circle'></em></a>
            <div class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up"
                aria-labelledby="navbarDropdownUserImage">
                <h6 class="dropdown-header d-flex align-items-center dropdown-notifications-header">
                    <em class='bx bxs-user'></em>
                    <div class="dropdown-user-details">
                        <div class="dropdown-user-details-name">
                            <div class="sidenav-footer-title">{{ Auth::user()->usuario }}</div>
                        </div>

                    </div>
                </h6>

                <!--<div class="dropdown-divider"></div>-->
                <a class="dropdown-item dropdown-notifications-item" href="#!">
                    <div class="dropdown-item-icon"><i data-feather="settings"></i></div>
                    {{ __('Setting') }}
                </a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                    <div class="dropdown-item-icon"><i data-feather="log-out"></i></div>
                    {{ __('Logout') }}
                </a>
            </div>
        </li>
    </ul>
</nav>
