<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.master');
    }

    public function store(LoginRequest $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('dashboard.index'); //redirect ke halaman dashboard
        }
        return redirect()->route('login.index')->with('error', 'Username atau Password anda Salah!');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.index');
    }
}
