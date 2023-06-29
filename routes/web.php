<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\EtiquetaController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\DashboardController;

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
    return view('page');
});
 
Route::resource('/usuarios',UsuarioController::class);

Route::resource('/ticketeria',TicketController::class);
Route::get('/ticketeria/{id}/asign', [App\Http\Controllers\TicketController::class, 'asign']);

Route::resource('/etiquetas',EtiquetaController::class);

Route::resource('/categorias',CategoriaController::class);

Route::resource('/administradores',AdministradorController::class);

Route::resource('/dashboard',DashboardController::class);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
