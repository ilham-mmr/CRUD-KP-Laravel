<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\NegaraController;
use App\Http\Controllers\SportsController;

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

Auth::routes(['verify' => true]);

Route::redirect('/', '/negara');

Route::get('/sports/create', [SportsController::class, 'create'])->name('sports.create');
Route::get('/sports', [SportsController::class, 'index'])->name('sports.index');
Route::post('/sports', [SportsController::class, 'store'])->name('sports.store');


Route::get('/negara', [NegaraController::class, 'index'])->name('negara.index');
Route::middleware(['auth', 'verified', 'admin'])->group(function () {
    Route::get('/negara/create', [NegaraController::class, 'create'])->name('negara.create');
    Route::get('/negara/{negara}/edit', [NegaraController::class, 'edit'])->name('negara.edit');
    Route::put('/negara/{negara}', [NegaraController::class, 'update'])->name('negara.update');
    Route::delete('/negara/{negara}', [NegaraController::class, 'destroy'])->name('negara.destroy');
    Route::post('/negara', [NegaraController::class, 'store'])->name('negara.store');
});
Route::get('/negara/{negara}', [NegaraController::class, 'show'])->name('negara.show');

Route::get('/kota', [KotaController::class, 'index'])->name('kota.index');


Route::get('/home', 'HomeController@index')->name('home');
