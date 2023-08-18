<?php

use App\Http\Controllers\Admin\Auth\LoginController as AuthLoginController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\Manage\AlumniController as ManageAlumniController;
use App\Http\Controllers\Admin\Report\StatisticController;
use App\Http\Controllers\Admin\Report\TracerController;
use App\Http\Controllers\Admin\Setting\ProfileController as SettingProfileController;
use App\Http\Controllers\User\Auth\LoginController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\Data\AlumniController;
use App\Http\Controllers\User\Data\TracerStudyController;
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

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'doLogin']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::middleware('auth')->group(function () {
    Route::prefix('user')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index']);

        Route::get('/data/alumni', [AlumniController::class, 'index']);
        Route::get('/data/alumni/ajax', [AlumniController::class, 'getIndexAjax']);
        Route::get('/data/alumni/detail/rabin', [AlumniController::class, 'detailRabin']);
        Route::get('/data/alumni/detail/{id}', [AlumniController::class, 'detail']);

        Route::get('/data/tracer-study', [TracerStudyController::class, 'index']);
        Route::post('/data/tracer-study', [TracerStudyController::class, 'store']);

        Route::get('/profile', [ProfileController::class, 'index']);
    });
});

Route::get('/admin/login', [AuthLoginController::class, 'index'])->name('admin_login');
Route::post('/admin/login', [AuthLoginController::class, 'doLogin']);

Route::middleware('auth')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'index']);

        Route::get('/manage/alumni', [ManageAlumniController::class, 'index']);
        Route::post('/manage/alumni', [ManageAlumniController::class, 'store']);
        Route::get('/manage/alumni/detail/{id}', [ManageAlumniController::class, 'detail']);

        Route::get('/report/tracer-study', [TracerController::class, 'index']);
        Route::get('/report/tracer-study/detail/{id}', [TracerController::class, 'detail']);

        Route::get('/report/statistik', [StatisticController::class, 'index']);

        Route::get('/profile', [SettingProfileController::class, 'index']);
    });
});
