<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Show the login form
     */
    public function showLoginForm()
    {
        return view('inicio-sesion');
    }

    /**
     * Process login
     */
    public function login(Request $request)
    {
        // Validate the form data
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to log the user in
        if (Auth::attempt($credentials)) {
            // If successful, redirect to home
            return redirect()->route('home');
        }

        // If unsuccessful, redirect back with error message
        return back()->withErrors([
            'email' => 'Las credenciales no coinciden con nuestros registros.',
        ]);
    }

    /**
     * Log the user out
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}