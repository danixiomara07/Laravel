<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SumaController;
use App\Http\Controllers\ProductoController;

//se agrega el controlador de unsacontroller


/*
Route::get('/', function () {
    return view('welcome');
});
*/

//la view BIenvenida
Route::get('/', function () {
    return view('bienvenido');
});

//ruta para crear un controlador
Route::get('suma', [SumaController::class, 'index']);
Route::post('suma', [SumaController::class, 'sumar']);

Route::get('producto', [ProductoController::class, 'index']);


//se agrega el controlador de unsacontroller
use App\Http\Controllers\UnsaController;
Route::get('/unsa', [UnsaController::class, 'index'])
    ->name('unsa.index');
