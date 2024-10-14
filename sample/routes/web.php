<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/homepage', [HomeController::class, 'showHomePage'])->name('home');
Route::post('/submitEmail', [HomeController::class, 'submitEmail'])->name('submit.email');

Route::get('/register/{email?}', [HomeController::class, 'showRegister'])->name('register');
Route::get('/browse', [HomeController::class, 'showBrowse'])->name('browse');
Route::get('/{title?}', [HomeController::class, 'showDetails'])->name('details');
