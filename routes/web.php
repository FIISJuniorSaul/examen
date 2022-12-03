<?php

use App\Http\Controllers\ClienteJuridicoController;
use App\Http\Controllers\ClienteNaturalController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\RutaController;
use App\Http\Controllers\CargaController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {


    Route::get('/main', function () {
        return view('admin.desktop');
    })->name('main');
    Route::get('/operaciones/clientesJuridico', function () {
        return view('admin.operaciones.clientes.index');
    })->name('clienteJuridico');
    Route::get('/operaciones/clientesNatural', function () {
        return view('admin.operaciones.clientes.indexClienteNatural');
    })->name('clienteNatural');
    Route::resource('usuario', UsersController::class);
    Route::resource('rutasdestino', RutaController::class);
    Route::resource('clienteJuridico', ClienteJuridicoController::class);
    Route::resource('clienteNatural', ClienteNaturalController::class);
    Route::resource('vehiculo', VehiculoController::class);
    Route::resource('ruta', RutaController::class);
    Route::resource('carga', CargaController::class);
    Route::get('/rutaDestino/{id}/editar', 'App\Http\Controllers\RutaController@edit_destino')->name('editarDestino');
    Route::get('/rutaOrigen/{id}/editar', 'App\Http\Controllers\RutaController@edit_origen')->name('editarOrigen');
    Route::put('/rutaDestino/editar/{id}', 'App\Http\Controllers\RutaController@update_destino')->name('actualizarDestino');
    Route::put('/rutaOrigen/editar/{id}', 'App\Http\Controllers\RutaController@update_origen')->name('actualizarOrigen');
    //Consulta Sunat
    Route::get(
                '/consultarruc',
                'App\Http\Controllers\CosultaSunatController@buscarRuc'
            )->name('buscarsunat');
});

Route::get('/set_language/{lang}', [App\Http\Controllers\Controller::class, 'set_language'])->name('set_language');

