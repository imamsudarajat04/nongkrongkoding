<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function update()
    {
        
    }
}
