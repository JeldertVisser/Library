<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Middleware\EnsureTokenIsValid;

Route::redirect('/', '/login');
Route::get('/login', [UserController::class, 'create'])->name('login_page');
Route::post('/login', [UserController::class, 'store'])->name('create_account');

Route::get('/home', [LoginController::class, 'create'])->name('home_page');
Route::post('/home', [LoginController::class, 'verify'])->name('verify_account');

Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
