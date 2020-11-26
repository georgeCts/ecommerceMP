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
    return view('Index');
});

Route::get('/producto', function () {
    return view('Producto');
});

Route::get('/carrito', function () {
    return view('Carrito');
});

Route::get('/pago', function () {
    return view('Pago');
});
