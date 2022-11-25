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

    Route::resource('usuario', UsersController::class);
    Route::resource('rutasdestino', RutaController::class);
    Route::resource('clienteJuridico', ClienteJuridicoController::class);
    Route::resource('clienteNatural', ClienteNaturalController::class);
    Route::resource('vehiculo', VehiculoController::class);
    Route::resource('ruta', RutaController::class);
    Route::resource('carga', CargaController::class);

        //Consulta Sunat
    Route::get(
                '/consultarruc',
                'App\Http\Controllers\CosultaSunatController@buscarRuc'
            )->name('buscarsunat');
});

Route::get('/set_language/{lang}', [App\Http\Contrlolers\Controller::class, 'set_language'])->name('set_language');

