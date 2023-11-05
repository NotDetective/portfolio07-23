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
    return view('homepage');
})->name('homepage');

Route::get('/about-me', function () {
    return view('');
})->name('about-me');

Route::get('/my-work', function () {
    return view('');
})->name('my-work');

Route::get('/contact', function () {
    return view('');
})->name('contact');
