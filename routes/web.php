<?php

use App\Http\Controllers\User\Auth\LoginController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\Data\AlumniController;
use App\Http\Controllers\User\Setting\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () { return redirect('/login'); });

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'doLogin']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::prefix('user')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::get('/data/alumni', [AlumniController::class, 'index']);
    Route::get('/data/alumni/detail/{id}', [AlumniController::class, 'detail']);

    Route::get('/data/tracer-study', function () { return view('alumni.index'); });

    Route::get('/profile', [ProfileController::class, 'index']);
});
