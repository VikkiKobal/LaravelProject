<?php

use App\Http\Controllers\CompanyController;
use Illuminate\Support\Facades\Route;

// Перенаправлення на компанії з dashboard
Route::get('/dashboard', function () {
    return redirect()->route('companies.index');
})->middleware(['auth', 'verified'])->name('dashboard');

// Група маршрутів для компаній з використанням middleware
Route::middleware(['auth'])->group(function () {
    // Index route for companies
    Route::get('/companies', [CompanyController::class, 'index'])->name('companies.index');

    // Route to show the form for creating a new company
    Route::get('/companies/create', [CompanyController::class, 'create'])->name('companies.create');

    // Route to store a new company
    Route::post('/companies', [CompanyController::class, 'store'])->name('companies.store');

    // Other routes for editing, updating, and deleting companies
    Route::get('/companies/{id}/edit', [CompanyController::class, 'edit'])->name('companies.edit');
    Route::put('/companies/{id}', [CompanyController::class, 'update'])->name('companies.update');
    Route::delete('/companies/{id}', [CompanyController::class, 'destroy'])->name('companies.destroy');
});

// Додайте маршрути для профілю, якщо потрібно
require __DIR__.'/auth.php';
