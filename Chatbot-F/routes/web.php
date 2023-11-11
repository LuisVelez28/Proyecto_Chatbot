<?php

use App\Http\Controllers\ProductosController;
use App\Http\Controllers\RangoPreciosController;
use App\Http\Controllers\SaboresController;
use App\Http\Controllers\TipoProductosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/Productos', function () {
    return view('productos');
});

Route::get('/Sedes', function () {
    return view('sedes');
});

Route::get('/CuentaAdmin', function () {
    return view('cuenta_Admin.indexAdmin');
});
Route::resource('/productos', ProductosController::class);
Route::resource('/rangoPrecios', RangoPreciosController::class);
Route::resource('/sabores', SaboresController::class);
Route::resource('/tipoProductos', TipoProductosController::class);

