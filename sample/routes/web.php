<?php

use App\Http\Controllers\AboutusController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BrowseController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\DetailsController;

Route::get('/', [HomeController::class, 'showHomePage'])->name('home');
Route::post('/submitEmail', [HomeController::class, 'submitEmail'])->name('submit.email');

Route::get('/register/{email?}', [AuthController::class, 'showRegister'])->name('registration');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login/{email?}', [AuthController::class, 'showLogin'])->name('loggingIn');
Route::post('/login', [AuthController::class, 'login'])->name('loggingIn');

Route::get('/browse', [BrowseController::class, 'showBrowse'])->name('browse');
Route::get('/details/movie/{title?}', [DetailsController::class, 'showMovieDetails'])->name('movie');
Route::get('/details/anime/{title?}', [DetailsController::class, 'showAnimeDetails'])->name('anime');
Route::get('/aboutus', [AboutusController::class, 'showAboutUs'])->name('about');
Route::get('/contactus', [ContactusController::class, 'showContactUs'])->name('contact');
