<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clientes', [ClienteController::class, 'obtenerTodosClientes'])->name('clientes');

Route::get('/clientes/obtener/{id}', [ClienteController::class, 'obtenerPorCodigo']);

Route::get('/clientes/crear', 
            [ClienteController::class, 'crearNuevo'])->name('crear');

Route::post('/clientes/guardar',[ClienteController::class, 'guardar'])->name('guardar');


Route::get('/clientes/ver/{codigo}', 
            [ClienteController::class, 'verCliente'])->name('ver');

Route::get('/clientes/editar/{id}', [ClienteController::class, 'verEditar'])->name('editar');

Route::get('/clientes/actualizar/{id}', [ClienteController::class, 'actualizar'])->name('actualizar');

Route::get('/clientes/eliminar/{codigo}', 
            [ClienteController::class, 'eliminar'])->name('eliminar');

Route::get('/clientes/destroy/{codigo}', 
            [ClienteController::class, 'destroy'])->name('destroy');