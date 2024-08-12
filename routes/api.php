<?php

use App\Http\Controllers\libroController;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\PrestamoController;
use App\Http\Controllers\ReadJsonController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
    
});


# Libros
Route::get('libros',[LibroController::class, 'index']);
Route::get('libros/{id}',[LibroController::class, 'show']);
Route::post('libros',[LibroController::class, 'store']);
Route::patch('libros/{id}',[LibroController::class, 'update']);
Route::delete('libros/{id}',[LibroController::class, 'destroy']);

# Usuarios
Route::get('usuarios',[UsuarioController::class, 'index']);
Route::get('usuarios/{id}',[UsuarioController::class, 'show']);
Route::post('usuarios',[UsuarioController::class, 'store']);
Route::patch('usuarios/{id}',[UsuarioController::class, 'update']);
Route::delete('usuarios/{id}',[UsuarioController::class, 'destroy']);

# Pedidos
Route::get('prestamos',[PrestamoController::class, 'index']);
Route::get('prestamos/{id}',[PrestamoController::class, 'show']);
Route::post('prestamos',[PrestamoController::class, 'store']);
Route::patch('prestamos/{id}',[PrestamoController::class, 'update']);
Route::delete('prestamos/{id}',[PrestamoController::class, 'destroy']);
Route::get('prestamos/leer-json',[PrestamoController::class, 'leerArchivoJson']);

# ReadJSON
Route::get('readjson',[ReadJsonController::class, 'index']);
Route::get('readjson/{id}',[ReadJsonController::class, 'show']);
Route::post('readjson',[ReadJsonController::class, 'store']);
Route::patch('readjson/{id}',[ReadJsonController::class, 'update']);
Route::delete('readjson/{id}',[ReadJsonController::class, 'destroy']);
