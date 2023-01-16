<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WikramaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [WikramaController::class, 'login'])->name('login');
Route::post('/login', [WikramaController::class, 'auth'])->name('login.auth');
Route::get('/register', [WikramaController::class, 'register'])->name('register');
Route::post('/register/input', [WikramaController::class, 'inputRegister'])->name('register.post');
Route::get('/home', [WikramaController::class, 'home'])->name('home');
Route::get('/landing', [WikramaController::class, 'landing'])->name('landing');
