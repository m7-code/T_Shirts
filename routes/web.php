<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;

use Illuminate\Support\Facades\Auth; 


// Route::get('/', function () {
//     return view('welcome');
// });

// Home page 
Route::get('/', [PageController::class, 'home'])->name('home');

// Single T-Shirt page
Route::get('/tshirt/{id}', [PageController::class, 'tshirt'])->name('tshirt');

// Auth pages
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');

// Data submit karne ke liye POST routes
Route::post('/login', [AuthController::class, 'loginPost'])->name('login.post');
Route::post('/register', [AuthController::class, 'registerPost'])->name('register.post');

Route::get('/admin/product/create', [PageController::class, 'create']);
Route::post('/admin/product/store', [PageController::class, 'store']);

Route::get('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/'); 
})->name('logout');