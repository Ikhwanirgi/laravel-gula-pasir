<?php

use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\HasilController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\NormalisasiController;
use App\Http\Controllers\ProfileController;
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






Route::get('/dashboard', function () {

    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', function () {

    return view('welcome');
});


Route::middleware('auth')->group(function () {
    Route::resource('/alternatif', AlternatifController::class);
    Route::resource('/kriteria', KriteriaController::class);
    Route::get('/alternatif/create',[AlternatifController::class, 'create'])->name('alternatif.create');
    Route::get('/alternatif/edit/{id}',[AlternatifController::class, 'edit'])->name('alternatif.edit');
    Route::put('/alternatif/{id}',[AlternatifController::class, 'update'])->name('alternatif.update');
    Route::post('/alternatif',[AlternatifController::class, 'store'])->name('alternatif.store');
    
    Route::get('/kriteria/edit/{id}',[KriteriaController::class, 'edit'])->name('kriteria.edit');
    Route::put('/kriteria/{id}',[KriteriaController::class, 'update'])->name('kriteria.update');
    Route::post('/kriteria/store',[KriteriaController::class, 'store'])->name('kriteria.store');

    Route::resource('/normalisasi', NormalisasiController::class);
    Route::resource('/hasil',HasilController::class);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
