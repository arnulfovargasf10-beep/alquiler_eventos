<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controller\EmpleadoController;
use App\Http\Controller\AlquilerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categorias', [CategoriaController::class, 'index']);
Route::get('/equipos', [EquipoController::class, 'index']);
Route::get('/clientes', [ClienteController::class, 'index']);
Route::get('/empleados', [EmpleadoController::class, 'index']);
Route::get('/alquileres', [AlquilerController::class, 'index']);