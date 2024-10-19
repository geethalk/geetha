<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavigationController;


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [NavigationController::class, 'index'])->name('login');
Route::get('/sign/{page?}', [NavigationController::class, 'index'])->name('sign.page');
Route::get('/signup', [NavigationController::class, 'signup'])->name('signup');
Route::get('/homm', [NavigationController::class, 'homm'])->name('homm');
