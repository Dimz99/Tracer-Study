<?php

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

Route::get('/', function () { return redirect('/dashboard'); });

Route::get('/dashboard', function () { return view('users.index'); });

Route::prefix('user')->group(function () {
    Route::get('/data/alumni', function () { return view('users.alumni.index'); });
    Route::get('/data/tracer-study', function () { return view('alumni.index'); });
});
