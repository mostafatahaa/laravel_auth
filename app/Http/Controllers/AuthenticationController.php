<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $userAuth = $request->only('email', 'password');

        if (Auth::attempt($userAuth)) {
            return redirect()->intended('/home')->with('success', 'Login Success');
        }
        return redirect()->route('auth.login')->with('danger', 'Falid Login');
    }
}
