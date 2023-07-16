<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Pengkurban
Route::get('/pengkurban', [App\Http\Controllers\PengkurbanController::class, 'index']);
Route::get('/pengkurban/create', [App\Http\Controllers\PengkurbanController::class, 'create']);
Route::post('/pengkurban', [App\Http\Controllers\PengkurbanController::class, 'store']);
Route::get('/pengkurban/{id}/edit', [App\Http\Controllers\PengkurbanController::class, 'edit']);
Route::patch('/pengkurban/{id}', [App\Http\Controllers\PengkurbanController::class, 'update']);
Route::delete('/pengkurban/{id}', [App\Http\Controllers\PengkurbanController::class, 'destroy']);
//Kurban
Route::get('/kurban', [App\Http\Controllers\KurbanController::class, 'index']);
Route::get('/kurban/create', [App\Http\Controllers\KurbanController::class, 'create']);
Route::post('/kurban', [App\Http\Controllers\KurbanController::class, 'store']);
Route::get('/kurban/{id}/edit', [App\Http\Controllers\KurbanController::class, 'edit']);
Route::patch('/kurban/{id}', [App\Http\Controllers\KurbanController::class, 'update']);
Route::delete('/kurban/{id}', [App\Http\Controllers\KurbanController::class, 'destroy']);
//Penerima
Route::get('/penerima', [App\Http\Controllers\PenerimaController::class, 'index']);
Route::get('/penerima/create', [App\Http\Controllers\PenerimaController::class, 'create']);
Route::post('/penerima', [App\Http\Controllers\PenerimaController::class, 'store']);
Route::get('/penerima/{id}/edit', [App\Http\Controllers\PenerimaController::class, 'edit']);
Route::patch('/penerima/{id}', [App\Http\Controllers\PenerimaController::class, 'update']);
Route::delete('/penerima/{id}', [App\Http\Controllers\PenerimaController::class, 'destroy']);

