<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminprofileController extends Controller
{
    public function index()
    {
        return view('dashboard.profile.index');
    }

    public function resetPassword()
    {
        return view('dashboard.profile.password');
    }

    public function updateProfile($id, Request $request)
    {
        $data = User::findOrFail($id);
        dd($request->all());
    }
}
