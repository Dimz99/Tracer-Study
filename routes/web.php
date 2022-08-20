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

Route::get('/', function () {
    return redirect('/dashboard');
});

Route::get('/dashboard', function () {
    return view('index');
});

Route::get('/master-data/alumni', function () {
    return view('master.alumni');
});

Route::get('/tracer-study/data', function () {
    return view('tracer.index');
});
Route::get('/tracer-study/angket', function () {
    return view('tracer.angket');
});

Route::get('/laporan/alumni', function () {
    return view('laporan.alumni');
});
Route::get('/laporan/tracer-study', function () {
    return view('laporan.tracer');
});

Route::get('/setting/profile', function () {
    return view('setting.profile');
});
