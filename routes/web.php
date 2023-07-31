<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ConsultasController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\RecibidoController;
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

Route::get('/', InicioController::class)->name('inicio');

Route::get('recibido', RecibidoController::class)->name('recibido');

Route::get('felipe-giacovino', ConsultasController::class)->name('consultas');

Route::post('form',FormController::class)->name('form');

Route::delete('eliminarConsulta/{msj}',[ConsultasController::class,'destroy'])->name('consultas.destroy');
