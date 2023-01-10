<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Permission;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //index
        // if(request()->ajax()) {
        //     $data = Permission::all();

        //     return DataTables::of($data)
        //         ->addColumn('action', function ($item) {
        //             return '
        //                  <a class="btn btn-primary" href="' . route('hak-akses.edit', $item->id) . '">
        //                     <i class="fas fa-pen"></i> Ubah
        //                 </a>
        //                 <button class="btn btn-danger delete_warga" data-id="' . $item->id . '">
        //                     <i class="fas fa-trash"></i> Hapus
        //                 </button>
        //             ';
        //         })
        //         ->rawColumns(['action'])
        //         ->addIndexColumn()
        //         ->make();
        // }
        // return view('dashboard.hak-akses.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
