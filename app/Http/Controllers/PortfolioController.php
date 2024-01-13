<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PortfolioController extends Controller
{
    public function index()
    {
        return Inertia::render('Portfolio/Home');
    }

    public function about()
    {
        return Inertia::render('Portfolio/AboutMe');
    }

    public function contact()
    {
        return Inertia::render('Portfolio/ContactMe');
    }

    public function work()
    {
        return Inertia::render('Portfolio/MyWork');
    }
}
