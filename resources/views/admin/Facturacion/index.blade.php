<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Facturacion</title>
</head>
<body>
    @extends('layouts.config')
    @section('content')
    @include('admin.header')
    <div id="layoutSidenav">
        @include('admin.sidebar')
        <div id="layoutSidenav_content">
            <main>
                <div class="page-header page-header-dark bg-gradient-primary-to-secondary mt-1">
                    <div class="page-header-content">
                        <div class="row justify-content-center">
                            <div class="col-12 col-xl-auto">
                                <h1 class="page-title">
                                    Facturación
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-body page-body-light pt-3 px-2">
                    <div class="card card-header-actions">
                        <div class="card-header">
                            Factuas Emitidas
                            <a href="/admin/facturacion/addfactura" class="btn btn-primary lift"><em
                                    class='bx bxs-user-plus'></em>{{ __('Nuevo') }}</a>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end py-2 px-4">
                            <form class="input-group">
                                <input name="busqueda" class="form-control me-md-2" type="search"
                                    placeholder="Ingrese nombre" aria-label="Search" autocomplete="off">

                            </form>
                        </div>
                        <div class="card-body py-9">
                            <table class="table table-sm table-bordered table-hover " id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Usuario</th>
                                        <th>Razon social</th>
                                        <th>Email</th>
                                        <th>Tipo comprobante</th>
                                        <th>N° Cotizacion</th>
                                        <th>Ruta</th>
                                        <th>Vehiculo</th>
                                        <th>Total</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>HECTOR</td>
                                        <td>GRATING PERU SAC</td>
                                        <td>Grupo@grating.perusac</td>
                                        <td>factura</td>
                                        <td>221121-01</td>
                                        <td>Lima-Clicalyo</td>
                                        <td>Tracto Plataforma</td>
                                        <td>3186</td>

                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection

    
</body>
</html>