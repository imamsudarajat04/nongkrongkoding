<?php

namespace App\Http\Controllers\Admin;

use App\Models\Videos;
use App\Models\Quotes;
use Illuminate\Http\Request;
use App\Models\CategoryVideo;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $tglSekarang = Carbon::now()->format('d F Y');
        $date = Carbon::now()->format('H:i');

        if($date >= '06:00' && $date <= '11:00')
        {
            $ucapan = "Selamat Pagi";
        }
        elseif($date >= '11:01' && $date <= '15:00')
        {
            $ucapan = "Selamat Siang";
        }
        elseif($date >= '15:01' && $date <= '17:59')
        {
            $ucapan = "Selamat Sore";
        }
        else
        {
            $ucapan = "Selamat Malam";
        }

        // Dashboard Index
        return view('dashboard.layout.DashboardLayout', [
            'admin'       => DB::table('users')->where('id'),
            'video'       => Videos::count(),
            'category'    => CategoryVideo::count(),
            'user'        => DB::table('users')->count(),
            'quotes'      => Quotes::all()->random(),
            'ucapan'      => $ucapan,
            'tglsekarang' => $tglSekarang,
        ]);
    }
}