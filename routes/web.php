<?php

use App\Http\Controllers\CompanyController;
use Illuminate\Support\Facades\Route;

// Перенаправлення кореневої сторінки на логін
Route::get('/', function () {
    return redirect()->route('login');
});

// Перенаправлення на компанії з dashboard
Route::get('/dashboard', function () {
    return redirect()->route('companies.index');
})->middleware(['auth', 'verified'])->name('dashboard');

// Група маршрутів для компаній з використанням middleware
Route::middleware(['auth'])->group(function () {
    Route::get('/companies', [CompanyController::class, 'index'])->name('companies.index');
    Route::get('/companies/create', [CompanyController::class, 'create'])->name('companies.create');
    Route::post('/companies', [CompanyController::class, 'store'])->name('companies.store');
    Route::get('/companies/{id}/edit', [CompanyController::class, 'edit'])->name('companies.edit');
    Route::put('/companies/{id}', [CompanyController::class, 'update'])->name('companies.update');
    Route::delete('/companies/{id}', [CompanyController::class, 'destroy'])->name('companies.destroy');
});

// Додайте маршрути для аутентифікації
require __DIR__.'/auth.php';

