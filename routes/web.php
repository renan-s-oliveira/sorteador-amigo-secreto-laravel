<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SorteioController;
use App\Http\Controllers\MembroSorteioController;
use App\Http\Controllers\MembroSorteadoController;

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
    return view('amigo_secreto.home');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/listar/membros', [MembroSorteioController::class, 'index'])->name('listar.membros');
Route::get('/adicionar/membros', [MembroSorteioController::class, 'create'])->name('adicionar.membros');
Route::post('/adicionar/membros', [MembroSorteioController::class, 'store'])->name('armazenar.membros');

Route::get('/sortear/amigo', [MembroSorteadoController::class, 'membroSorteado'])->name('sortear.membros');

Route::get('/template', function () {
    return view('layouts.sorteio_layout');
});

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/registrar/sorteio', [SorteioController::class, 'create'])->name('registrar.sorteio');
    Route::get('logado', function () {
        return auth()->user()->id;
    });
    Route::post('/upload', [SorteioController::class, 'upload'])->name('upload');
});
