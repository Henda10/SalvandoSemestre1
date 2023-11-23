<?php

use App\Http\Controllers\ViewsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\MotosController;
use App\Http\Controllers\ServiciosController;

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
    return view('auth.login');
});

Route::get('/login', [LoginController::class, 'show']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'show']);
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/logout', [LogoutController::class, 'logout']);

Route::controller(ViewsController::class)->group(function () {
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/motorcycle_guys_list', 'motorcycle_guys_list')->name('motorcycle_guys_list');

    Route::get('/orders', 'orders')->name('orders');
});

Route::resource('/clientes',ClientesController::class);
Route::resource('/categorias',CategoriasController::class);
Route::resource('/Motos',MotosController::class);
Route::resource('/usuarios',EmployeesController::class);
Route::resource('/servicios',ServiciosController::class);
