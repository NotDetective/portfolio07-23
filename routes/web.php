<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PortfolioController::class, 'index'])
    ->name('home');
Route::get('/about', [PortfolioController::class, 'about'])
    ->name('about');
Route::get('/contact', [PortfolioController::class, 'contact'])
    ->name('contact');
Route::get('/my-work/{type?}', [PortfolioController::class, 'work'])
    ->name('work');

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [AuthController::class, 'show'])
        ->name('login');
    Route::post('/login', [AuthController::class, 'login'])
        ->name('login.post');
});

Route::get('/logout', [AuthController::class, 'logout'])
    ->name('logout');

Route::group(['middleware' => 'auth', 'prefix' => 'dashboard'], function () {

    Route::get('/', function () {
        return inertia('Dashboard/Index');
    })->name('dashboard');

    //crud for skills

    //crud for projects

    //crud for repos
});
