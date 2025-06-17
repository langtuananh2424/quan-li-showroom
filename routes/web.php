<?php

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

Route::get('/oto', function () {
    return view('oto');
})->name('oto');

Route::get('/info', function() {
    return view('info');
})->name('info');

Route::get('/service', function() {
    return view('service');
})->name('service');

Route::get('/718', function() {
    return view('718');
})->name('718');