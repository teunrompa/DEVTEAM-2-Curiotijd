<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AchievementsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/






Route::get('register', function () {
    return view('register');
});

Route::get('/', function () {
    return view('login');
});

Route::get('account', function () {
    return view('account');
});

Route::post('achievements', [AchievementsController::class, 'store']);
Route::get('achievements', [AchievementsController::class, 'index']);
Route::get('user', [userController::class, 'levelSysteem']);

Route::post('login', [LoginController::class, 'store']);
Route::get('login', [LoginController::class, 'index']);

Route::get('dashboard', function () {
    return view('dashboard');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
