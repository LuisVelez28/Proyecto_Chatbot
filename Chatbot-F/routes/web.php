<?php

use App\Http\Controllers\ChatBotController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\RangoPrecioController;
use App\Http\Controllers\SaborController;
use App\Http\Controllers\TipoProductoController;
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
Route::resource('/productos', ProductoController::class);
Route::resource('/rangoPrecios', RangoPrecioController::class);
Route::resource('/sabores', SaborController::class);
Route::resource('/tipoProductos', TipoProductoController::class);

Route::match(['get', 'post'], '/botman', [ChatBotController::class, 'index']);

