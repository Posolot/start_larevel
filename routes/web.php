<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BirthdayController;
use App\Http\Controllers\FormController;

// Главная страница
Route::get('/', [BirthdayController::class, 'index'])->name('home');

// Users
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

// Birthdays
Route::get('/birthdays', [BirthdayController::class, 'index'])->name('birthdays.index');
Route::get('/birthdays/create', [BirthdayController::class, 'create'])->name('birthdays.create');
Route::post('/birthdays', [BirthdayController::class, 'store'])->name('birthdays.store');
Route::get('/birthdays/{birthday}/edit', [BirthdayController::class, 'edit'])->name('birthdays.edit');
Route::put('/birthdays/{birthday}', [BirthdayController::class, 'update'])->name('birthdays.update');
Route::delete('/birthdays/{birthday}', [BirthdayController::class, 'destroy'])->name('birthdays.destroy');

