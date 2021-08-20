<?php

use App\Http\Controllers\KotaController;
use App\Http\Controllers\NegaraController;
use Illuminate\Support\Facades\Route;

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
Route::redirect('/','/negara');

Route::get('/negara', [NegaraController::class, 'index'])->name('negara.index');
Route::get('/negara/{negara}', [NegaraController::class, 'show'])->name('negara.show');
Route::get('/kota', [KotaController::class, 'index'])->name('kota.index');
