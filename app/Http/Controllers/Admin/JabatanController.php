<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use Yajra\DataTables\Facades\DataTables;
use RealRashid\SweetAlert\Facades\Alert;

class JabatanController extends Controller
{
    //Middleware untuk Jabatan
    public function __construct()
    {
        $this->middleware('permission:jabatan_access|jabatan_create|jabatan_edit|jabatan_delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:jabatan_create', ['only' => ['create', 'store']]);
        $this->middleware('permission:jabatan_edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:jabatan_delete', ['only' => ['destroy']]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(request()->ajax()) {
            $query = DB::table('roles')->get();

            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                  return '
                    <td>
                      <div class="dropdown d-inline-block">
                        <button
                          class="btn btn-soft-secondary btn-sm dropdown"
                          type="button"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                        >
                          <i class="ri-more-fill align-middle"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li>
                            <a class="dropdown-item edit-item-btn" href="' . route('pengguna.edit', $item->id) . '"
                              ><i
                                class="ri-pencil-fill align-bottom me-2 text-muted"
                              ></i>
                              Edit</a
                            >
                          </li>
                          <li>
                            <a href="javascript:void(0);" class="dropdown-item remove-item-btn" id="btn-hapus" data-id="' . $item->id . '">
                              <i
                                class="ri-delete-bin-fill align-bottom me-2 text-muted"
                              ></i>
                              Delete
                            </a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  ';
                })
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make();
        }
        return view('dashboard.pages.role.index');
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
