<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;
use RealRashid\SweetAlert\Facades\Alert;

class RegisterController extends Controller
{
    public function store(RegisterRequest $request)
    {
        $data = $request->all();
        $data['password'] = Hash::make($request->password);

        User::create($data);

        Alert::success('', 'Berhasil Daftar!');
        return redirect()->route('login.index');
    }
}
