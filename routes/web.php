<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clientes', [ClienteController::class, 'obtenerTodosClientes']);

Route::get('/clientes/obtener/{id}', [ClienteController::class, 'obtenerPorCodigo']);

Route::get('/clientes/crear', 
            [ClienteController::class, 'crearNuevo'])->name('crear');
