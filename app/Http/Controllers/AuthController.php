<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function Authentication(Request $request)
    {
        $request->validate([
            'email' =>'required|email',
            'password' =>'required',
        ]);
// Cek credentials user
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();
            if ($user->id_role == "1") {
                return redirect()->intended('/dashboard');
            } elseif ($user->id_role == "2") {
                return redirect()->intended('/dashboard');
                if (!redirect()->intended('/dashboard')) {
                    abort(404);
                }
            }
        } else {

            return back()->with('logError', 'login failed!');
        }
    }
}
