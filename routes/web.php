<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsultarController;
use App\Http\Controllers\ComprarController;

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
    return view('welcome');
});

Route::get('/libros', [ConsultarController::class, 'listarLibros'])->name('index');
Route::get('/libros/{id}', [ConsultarController::class, 'verLibro'])->name('show');

// Ruta para mostrar el formulario de compra
Route::get('/libros/comprar/{id}', [ComprarController::class, 'mostrarFormulario'])->name('formulario');

// Ruta para procesar la compra
Route::post('/libros/comprar/{id}', [ComprarController::class, 'comprar'])->name('libro');

