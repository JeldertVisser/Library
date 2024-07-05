<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

Route::redirect('/', '/login');
Route::get('/login', [UserController::class, 'create'])->name('login_page');
Route::post('/login', [UserController::class, 'store'])->name('create_account');

Route::post('/home', [LoginController::class, 'verify'])->name('verify_account');
