<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $admin = DB::table('users')->where('id');
        return view('dashboard.index', ['admin' => $admin]);
    }
}
