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
            return to_route('dashboard');
        }

        return back()->withErrors([
            'email' => 'Email of wachtwoord is incorrect of bestaat niet',
        ]);
    }

    public function logout()
    {
        auth()->logout();
        return to_route('home');
    }
}
