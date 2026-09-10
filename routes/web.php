<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/' , [PageController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::post('login', [LoginController::class, 'authenticate']);