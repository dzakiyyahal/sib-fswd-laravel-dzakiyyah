<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MainController;
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

Route::prefix('dashboard')->middleware(['auth'])->group(function () {
    Route::get('/', [UserController::class, 'index']);
    Route::get('/add-user', [UserController::class, 'create']);
    Route::post('/add-user', [UserController::class, 'store']);
    Route::get('/edit-user/{id}', [UserController::class, 'edit']);
    Route::post('/edit-user/{id}', [UserController::class, 'update']);
    Route::get('/delete-user/{id}', [UserController::class, 'destroy']);
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::get('/', [MainController::class, 'index']);
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginProses']);