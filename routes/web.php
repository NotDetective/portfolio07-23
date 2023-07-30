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
    return view('landing-page');
});

Route::get('/about-me', function () {
    return view('about-me');
});

Route::get('/my-work', function () {
    return view('my-work');
});

Route::get('/about-website', function () {
    return view('about-website');
});

Route::get('/home', function () {
    return view('landing-page');
});
