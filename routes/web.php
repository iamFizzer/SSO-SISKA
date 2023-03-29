<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->name('dashboard');


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/home', function () {
    return view('index');
})->middleware('auth')->name('index');

Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');