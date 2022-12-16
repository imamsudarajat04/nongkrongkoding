<?php

namespace App\Http\Controllers;

use App\Models\Videos;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $kelas = Videos::latest()->limit(5)->get();
        return view('landingpage.index', [
            'kelas' => $kelas,
        ]);
    }
}
