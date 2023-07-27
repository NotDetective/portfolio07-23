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
    return abort('404');
});

Route::get('/beta-build', function () {
    return view('beta-build');
});


// give user a 404 error for testing 

Route::get('/404', function () {
    return abort('404');
});
