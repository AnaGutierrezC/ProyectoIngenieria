<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MysqlController;
use App\Http\Controllers\UsuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TicketsController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\EtiquetaController;
use App\Http\Controllers\PrioridadController;


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

Route::get('/usuarios/registro',[UsuController::class, 'create']);
Route::resource('/usuarios',UsuController::class);

Route::resource('/ticketeria',TicketsController::class);
Route::get('/ticketeria/crear',[TicketsController::class, 'create']);
Route::get('/ticketeria/confirmacion',[TicketsController::class, 'store']);

Route::get('/categorias',[CategoriaController::class, 'index']);


Route::get('/etiquetas',[EtiquetaController::class, 'index']);

Route::get('/prioridades',[PrioridadController::class, 'index']);
