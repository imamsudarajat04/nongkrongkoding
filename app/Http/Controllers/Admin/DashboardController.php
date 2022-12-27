<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Videos;
use App\Models\CategoryVideo;

class DashboardController extends Controller
{
    public function index()
    {
        //Dashboard Index
        return view('dashboard.index', [
            'admin'    => DB::table('users')->where('id'),
            'video'    => Videos::count(),
            'category' => CategoryVideo::count(),
            'user'     => DB::table('users')->count(),
        ]);
    }
}
