<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register_process',[AuthController::class,'registerProcess'])->name('registerProcess');

Route::get('/login',[AuthController::class,'showLoginForm'])->name('login');

Route::post('/login_process',[AuthController::class,'loginProcess'])->name('loginProcess');

Route::get('/dashboard',[AuthController::class,'dashboard'])->name('dashboard');

Route::post('/logout',[AuthController::class,'logout'])->name('logout');

