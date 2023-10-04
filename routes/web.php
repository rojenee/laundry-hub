<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('./auth/login');
});
Route::get('/signup', function () {
    return view('./auth/signup');
});
Route::get('/sidebar', function () {
    return view('./sidebar');
});
Route::get('/order', function () {
    return view('./order');
});
Route::get('/validation', [AuthController::class, 'validation'])->name('validation');
Route::post('/info', [AuthController::class, 'info'])->name('info');
