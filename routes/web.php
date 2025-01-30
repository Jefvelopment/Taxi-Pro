<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

Route::get('/', function () {
    return view('home');
});

// Route::resource('cars', CarController::class);

Route::get('/cars', [CarController::class, 'index'])->name('cars.index');
Route::get('/cars/create', [CarController::class, 'create'])->name('cars.create');
Route::post('/cars', [CarController::class, 'store'])->name('cars.store');
Route::get('/cars/{id}/edit', [CarController::class, 'edit'])->name('cars.edit');
Route::put('/cars/{id}', [CarController::class, 'update'])->name('cars.update');
Route::get('/cars/{id}', [CarController::class, 'destroy'])->name('cars.destroy');
