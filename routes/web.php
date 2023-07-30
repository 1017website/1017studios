<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;

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

// Route::get('/', [HomeController::class, 'index']);
Route::get('/', [WelcomeController::class, 'index']);
Route::get('/about_us', [WelcomeController::class, 'about_us']);
Route::get('/portofolio', [WelcomeController::class, 'portofolio']);
Route::get('/testimoni', [WelcomeController::class, 'testimoni']);
Route::get('/kontak', [WelcomeController::class, 'kontak']);
Route::get('/berita', [WelcomeController::class, 'berita']);

// Route::view('/about_us', 'about_us');
