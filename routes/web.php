<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormOrtaController;

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
    return view('home');
})->name('home');

Route::get('/formulir', function () {
    return view('formulir');
})->name('formulir');

Route::post('/simpan-form-orta',[FormOrtaController::class,'store'])->name('simpan-form-orta');
