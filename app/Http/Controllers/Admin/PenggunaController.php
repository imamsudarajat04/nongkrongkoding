<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Http\Requests\PenggunaRequest;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use RealRashid\SweetAlert\Facades\Alert;

class PenggunaController extends Controller
{
    public function __construct()
    {
      $this->middleware('permission:pengguna_access', ['only' => ['index']]);
      $this->middleware('permission:pengguna_create', ['only' => ['create', 'post']]);
      $this->middleware('permission:pengguna_edit', ['only' => ['edit', 'put']]);
      $this->middleware('permission:pengguna_delete', ['only' => 'destroy']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(request()->ajax()) {
            $query = User::all();

            return DataTables::of($query)
                ->addColumn('action', function($item) {
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
                            <a href="#!" class="dropdown-item"
                              ><i
                                class="ri-eye-fill align-bottom me-2 text-muted"
                              ></i>
                              View</a
                            >
                          </li>
                          <li>
                            <a class="dropdown-item edit-item-btn"
                              ><i
                                class="ri-pencil-fill align-bottom me-2 text-muted"
                              ></i>
                              Edit</a
                            >
                          </li>
                          <li>
                            <a class="dropdown-item remove-item-btn">
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
                ->editColumn('avatar', function($item) {
                  $avatar = Storage::exists('public/' . $item->avatar) && $item->avatar ? Storage::url($item->avatar) : asset('admin/assets/img/avatars/1.png');

                  return '
                    <div class="image-wrapper">
                      <div class="image" style="background-image: url(' . $avatar . ')"></div>
                    </div>
                  ';
                })
                ->rawColumns(['action', 'avatar'])
                ->addIndexColumn()
                ->make();
        }
        return view('dashboard.pages.user.index');
    }

    public function getRole()
    {
        // $roles = Role::pluck('id','id')->pluck('name', 'name')->all();
        $roles = Role::all();
        
        if(!empty($roles))
        {
          return response()->json([
            'status' => 200,
            'msg'    => 'Berhasil',
            'data'   => $roles
          ]);
        }
        else
        {
          return response()->json([
            'status' => 404,
            'msg'    => 'Tidak ditemukan',
          ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PenggunaRequest $request)
    {
      $data = $request->all();
      $data['password'] = Hash::make($data['password']);
      $data['avatar'] = $request->file('avatar')->store('avatar', 'public');

      $user = User::create($data);
      $user->assignRole($request->input('roles'));

      Alert::success('', 'Pendaftaran Pengguna Berhasil');
      return redirect()->route('pengguna.index');
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
