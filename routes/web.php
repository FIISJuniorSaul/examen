<?php

use App\Http\Controllers\ClienteJuridicoController;
use App\Http\Controllers\ClienteNaturalController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\RutaController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {


    Route::get('/main', function () {
        return view('admin.desktop');
    })->name('main');

    Route::resource('usuario', UsersController::class);
    Route::resource('rutasdestino', RutaController::class);
   Route::resource('clienteJuridico', ClienteJuridicoController::class);
   Route::resource('clienteNatural', ClienteNaturalController::class);

/* rutas-usuario*/

    Route::get('/configuracion/infoempresa', function () {
        return view('admin.configuracion.infoempresa.modifi');
    });
 /* rutas-vehiculos*/
    Route::get('/operaciones/vehiculos', function () {
        return view('admin.operaciones.vehiculos.index');
    });
    Route::get('/operaciones/vehiculos/add', function () {
        return view('admin.operaciones.vehiculos.create');
    });
    //clientesjuridico
    //Route::get('/clientes/lista', 'ClienteJuridicoController@index');
   /* rutas-rutas*/

    /* rutas-cotizacion*/
    Route::get('/operaciones/cotizar', function () {
        return view('/admin/operaciones/cotizar.index');
    });
    Route::get('/operaciones/cotizar/add', function () {
        return view('/admin/operaciones/cotizar.createCotizacion');
    });


   /* rutas-cliente-empresa*/
    Route::get('/operaciones/clientes', function () {
        return view('admin.operaciones.clientes.index');
    });
    Route::get('/operaciones/clientes/index', function () {
        return view('admin.operaciones.clientes.index');
    });
    Route::get('/operaciones/clientes/crear', function () {
        return view('admin.operaciones.clientes.crear');
    });
    Route::get('/operaciones/clientes/indexClienteNatural', function () {
        return view('admin.operaciones.clientes.indexClienteNatural');
    });
    Route::get('/operaciones/clientes/crearPersonaNatural', function () {
        return view('admin.operaciones.clientes.crearPersonaNatural');
    });
        /* rutas facturación*/
    Route::get('/facturacion/factura', function () {
        return view('admin.facturacion.factura.index');
    });

        /* rutas reporte-cliente*/
   /* Route::get('/reportes/clienteReport', function () {
        return view('admin.reportes.clienteReport.index');
    });*/
        /* rutas reporte-rutas*/
   /* Route::get('/reportes/rutaReport', function () {
        return view('admin.reportes.rutaReport.index');
    });*/
        /* rutas reporte-usuario*/
    /*Route::get('/reportes/usuarioReport', function () {
        return view('admin.reportes.usuarioReport.index');
    });*/
        /* rutas reporte-vehiculo*/
   /* Route::get('/reportes/vehiculoReport', function () {
        return view('admin.reportes.vehiculoReport.index');
    });*/
    Route::get('/principal/main', function () {
        return view('admin.principal.main');
    });

        //Consulta Sunat
    Route::get(
                '/consultarruc',
                'App\Http\Controllers\CosultaSunatController@buscarRuc'
            )->name('buscarsunat');
});

Route::resource('vehiculos', VehiculoController::class);

