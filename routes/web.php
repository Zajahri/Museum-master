<?php

use App\Http\Controllers\userController;
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
    return view('pages/dashboard');
});

Route::get('dashboard', function() {
    return view('pages/dashboard');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('appointment', [userController::class, 'appointment'])->name('appointment');
Route::get('dashboard', [userController::class, 'dashboard'])->name('dashboard');
Route::get('inventory', [userController::class, 'inventory'])->name('inventory');
Route::get('visitor', [userController::class, 'visitor'])->name('visitor');