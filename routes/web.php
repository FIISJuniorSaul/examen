<?php

use App\Http\Controllers\IncidenteController;
use App\Http\Controllers\UbicacionController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsersController;



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
    Route::resource('incidente', IncidenteController::class);
    Route::resource('ubicacion', UbicacionController::class);
    //Consulta Sunat
    Route::get(
                '/consultarruc',
                'App\Http\Controllers\CosultaSunatController@buscarRuc'
            )->name('buscarsunat');
});

Route::get('/set_language/{lang}', [App\Http\Controllers\Controller::class, 'set_language'])->name('set_language');

