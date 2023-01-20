@extends('dashboard.layout.DashboardLayout')
@push('customCss')
  <link
    href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css"
    rel="stylesheet"
  />
@endpush
@section('title', 'Halaman Tambah Pengguna')
@section('showMenu', 'show')
@section('pengguna', 'active')

@section('pageTitle', 'Pengguna')

@section('breadcrumb')
  <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
  <li class="breadcrumb-item">Data Pengguna</li>
  <li class="breadcrumb-item active">Tambah Pengguna</li>
@endsection

@section('content')
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <div class="d-flex align-items-center">
              <h5 class="card-title mb-0 flex-grow-1">Tambah Pengguna</h5>

              <div class="flex-shrink-0">
                <a class="btn btn-danger add-btn" href="{!! route('pengguna.index') !!}">Kembali</a>
              </div>
            </div>
          </div>

          <div class="card-body">
            <form action="{!! route('pengguna.store') !!}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="row">
                <div class="col-12">
                  <div class="mb-3">
                    <label for="Name" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" name="name" id="name" value="{!! old('name') !!}" placeholder="Masukkan Nama Lengkap..">

                    @error('name')
                      <div class="mt-1">
                        <span class="text-danger">{{$message}}</span>
                      </div>
                    @enderror
                  </div>
                </div>

                <div class="col-12">
                  <div class="mb-3">
                    <label for="Email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" value="{!! old('email') !!}" placeholder="Masukkan Email..">

                    @error('email')
                      <div class="mt-1">
                        <span class="text-danger">{{$message}}</span>
                      </div>
                    @enderror
                  </div>
                </div>

                <div class="col-6">
                  <div class="mb-3">
                    <label for="Password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password..">

                    @error('password')
                      <div class="mt-1">
                        <span class="text-danger">{{$message}}</span>
                      </div>
                    @enderror
                  </div>
                </div>

                <div class="col-6">
                  <div class="mb-3">
                    <label for="Confirm Password" class="form-label">Konfirmasi Password</label>
                    <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" placeholder="Masukkan Konfirmasi Password..">

                    @error('confirmPassword')
                      <div class="mt-1">
                        <span class="text-danger">{{$message}}</span>
                      </div>
                    @enderror
                  </div>
                </div>

                <div class="col-12">
                  <div class="mb-3">
                    <label for="Telephone" class="form-label">Nomor Handphone / WhatsApp</label>
                    <div class="input-group">
                      <div class="input-group-text">+62</div>
                      <input type="text" class="form-control" name="telphone" id="telphone" value="{!! old('telphone') !!}" placeholder="8xxxxxxxxxx">
                    </div>

                    @error('telphone')
                      <div class="mt-1">
                        <span class="text-danger">{{$message}}</span>
                      </div>
                    @enderror
                  </div>
                </div>

                <div class="col-12">
                  <div class="mb-3">
                    <label for="Avatar" class="form-label">Avatar</label>
                    <input type="file" class="form-control" name="avatar" id="avatar">

                    @error('avatar')
                      <div class="mt-1">
                        <span class="text-danger">{{$message}}</span>
                      </div>
                    @enderror
                  </div>
                </div>

                <div class="col-12">
                  <div class="mb-3">
                    <label for="Role" class="form-label">Jabatan</label>
                    <select class="js-example-basic-single select2-hidden-accessible" name="roles" id="roles"></select>

                    @error('roles')
                      <div class="mt-1">
                        <span class="text-danger">{{$message}}</span>
                      </div>
                    @enderror
                  </div>
                </div>

                <div class="d-grid gap-2">
                  <button class="btn btn-primary" type="submit">Tambah Pengguna</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection

@push('customJs')
  <!--jquery cdn-->
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <!--select2 cdn-->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="{!! asset('admin/assets/js/pages/select2.init.js') !!}"></script>

    <script>
      $(document).ready(function () {
        $("#roles").select2({
          placeholder: 'Cari Jabatan',

          ajax: {
              url : "{{ route('getRole') }}",
              processResults: function({data}){
                  return{
                      results: $.map(data, function(item){
                          return{
                              id : item.id,
                              text : item.name,
                          }
                      })
                  }
              },
          }
        });
      });
    </script>
@endpush