<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
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
    return view('layouts.layout');
});

Route :: get('/form',[FormController::class,'showForm'])->name('form.show');
Route :: post('/form/submit',[FormController::class,'submitForm'])->name('form.submit');

Route :: get('/data',[FormController::class,'showData'])->name('data.show');
