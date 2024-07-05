<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::redirect('/', '/login');

Route::get('/login', [UserController::class, 'create']);
Route::post('/login', [UserController::class, 'store']);
