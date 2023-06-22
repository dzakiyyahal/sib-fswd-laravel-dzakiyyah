<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('dashboard/login');
    }

    public function loginProses(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard/');
        } else {
            return redirect()->back()->withErrors(['message' => 'Login gagal. Silakan cek kembali email dan password Anda.']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}