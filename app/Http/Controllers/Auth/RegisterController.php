<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function store(SettingProfileRequest $request)
    {
        $data = $request->all();
        $data['password'] = Hash::make($request->password);

        User::create($data);
        return redirect()->route('register.index')->with('success', 'Data berhasil ditambahkan');
    }
}
