<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
})->name('home');

// AUTH / REGISTER ROUTERS
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store'])->name('register.store');
Route::get('/select-state', [AuthController::class, 'selectState'])->name('select-state');
Route::put('/select-state', [AuthController::class, 'setState'])->name('state');
Route::get('/forgot-password', [AuthController::class, 'forgot'])->name('forgot-password');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

//MY ACCOUNT ROUTERS
Route::get('/my-account', [UserController::class, 'show'])->name('myAccount');
