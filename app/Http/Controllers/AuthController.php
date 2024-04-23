<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function show()
    {
        return inertia('Auth/Login');
    }

    public function login(AuthRequest $request)
    {
        if (auth()->attempt($request->only('email', 'password'), $request->remember)) {
            request()->session()->regenerate();
            // redirect to dashboard
            return to_route('dashboard');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
