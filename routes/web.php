<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

// Головна сторінка, яка показує список компаній
Route::get('/', [CompanyController::class, 'index'])->name('companies.index');

// Роут для створення нової компанії
Route::get('companies/create', [CompanyController::class, 'create'])->name('companies.create');
Route::post('companies', [CompanyController::class, 'store'])->name('companies.store');

// Роут для перегляду окремої компанії
Route::get('companies/{company}', [CompanyController::class, 'show'])->name('companies.show');

// Роут для редагування компанії
Route::get('companies/{company}/edit', [CompanyController::class, 'edit'])->name('companies.edit');
Route::put('companies/{company}', [CompanyController::class, 'update'])->name('companies.update');

// Роут для видалення компанії
Route::delete('companies/{company}', [CompanyController::class, 'destroy'])->name('companies.destroy');
