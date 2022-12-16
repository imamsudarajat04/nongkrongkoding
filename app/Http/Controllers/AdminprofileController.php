<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\UpdateProfileRequest;

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

    public function updateProfile($id, UpdateProfileRequest $request)
    {
        $data = $request->all();
        $cek = User::findOrFail($id);
        
        if($request->hasFile('avatar')) {
            $data['avatar'] = $request->file('avatar')->store('avatar', 'public');
        }

        $cek->update($data);

        Alert::success('', 'Berhasil ubah profil!');
        return redirect()->route('admin.profile');
    }
}
