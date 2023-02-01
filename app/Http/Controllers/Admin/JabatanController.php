<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\RoleRequest;
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
            $query = Role::with('permissions');

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
                            <a class="dropdown-item edit-item-btn" href="' . route('jabatan.edit', $item->id) . '"
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
                ->editColumn('permissions', function ($item) {
                  return view('dashboard.pages.role.column.permission', compact('item'))->render();
                })
                ->rawColumns(['action', 'permissions'])
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
        $permissions = DB::table('permissions')->get();
        return view('dashboard.pages.role.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleRequest $request)
    {
        $role = Role::create(['name' => $request->input('name')]);
        $role->syncPermissions($request->input('permission'));

        Alert::success('', 'Tambah Jabatan Berhasil');
        return redirect()->route('jabatan.index');
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
        $data = Role::findOrFail($id);
        $permissions = Permission::all();
        $data->load('permissions');
        // dd($data->load('permissions'));
        if($data->id == 2)
        {
          Alert::error('', 'Jabatan Super Admin Tidak Boleh Diubah!');
          return redirect()->route('jabatan.index');
        }

        return view('dashboard.pages.role.edit', [
          'data'        => $data,
          'permissions' => $permissions,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RoleRequest $request, $id)
    {
       $data = Role::findOrFail($id);
       $req = $request->all();

       $data->update($request->all());
       $data->permissions()->sync($request->input('permission', []));

       Alert::success('', 'Ubah Jabatan Berhasil');
       return redirect()->route('jabatan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Role::findOrFail($id);
        if($data->id == 2)
        {
          return response()->json([
            'message' => 'Data tidak boleh dihapus',
            'status'  => 403,
          ]);
        }
        elseif(empty($data))
        {
          return response()->json([
            'message' => 'Data tidak ditemukan!',
            'status'  => 404,
          ]);
        }
        else
        {
          $data->delete();
          return response()->json([
            'message' => 'Data berhasil dihapus!',
            'status'  => 200,
          ]);
        }
    }
}
