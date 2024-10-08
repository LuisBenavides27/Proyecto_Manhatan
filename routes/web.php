<?php

use App\Http\Controllers\ContratoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModuloController;

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

/* Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
}); */

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    // Ruta actualizada para usar el controlador
    Route::get('/dashboard', [ContratoController::class, 'index'])->name('dashboard');
});

Route::get('Modulo', [ModuloController::class, 'index'])
    ->name('Modulo'); 

Route::get('contratos.show/{id}', [ContratoController::class,'show'])->name('contratos.show');