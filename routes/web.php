<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::get('/main', function () {
        return view('admin.desktop');
    });
    Route::get('/usuario', function () {
        return view('admin.usuario.index');
    });
    Route::get('/usuario/add', function () {
        return view('admin.usuario.add');
    });
    Route::get('/roles', function () {
        return view('admin.roles.index');
    });
    Route::get('/roles/addroles', function () {
        return view('admin.roles.addroles');
    });
});


