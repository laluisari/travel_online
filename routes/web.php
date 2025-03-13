<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('home/index', ['title' => 'Home Page']);
});

Route::get('/bus', function () {
    return view('bus/index', ['title' => 'Bus Page']);
});

Route::get('/login', function () {
    return view('auth/login', ['title' => 'login Page']);
})->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

