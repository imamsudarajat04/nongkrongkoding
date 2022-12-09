<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function index()
    {
        if(Auth::check())
        {
            return redirect()->route('dashboard.index');
        }
        
        return view('auth.master');
    }

    public function store(LoginRequest $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {

            Alert::success('', 'Selamat Datang di NongkrongKoding');
            return redirect()->route('dashboard.index'); //redirect ke halaman dashboard
        }

        Alert::warning('', 'Gagal Masuk');
        return redirect()->route('login.index');
    }

    public function logout()
    {
        Auth::logout();

        Alert::success('', 'Berhasil Keluar');
        return redirect()->route('login.index');
    }
}
