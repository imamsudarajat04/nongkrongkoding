@extends('dashboard.layout.DashboardLayout')

@push('customCss')
  <link
    href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css"
    rel="stylesheet"
  />
@endpush
@section('title', 'Halaman Ubah Jabatan')
@section('showMenu', 'show')
@section('jabatan', 'active')

@section('pageTitle', 'Jabatan')

@section('breadcrumb')
  <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
  <li class="breadcrumb-item">Data Jabatan</li>
  <li class="breadcrumb-item active">Ubah Jabatan</li>
@endsection

@section('content')
  <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <div class="d-flex align-items-center">
              <h5 class="card-title mb-0 flex-grow-1">Ubah Jabatan</h5>

              <div class="flex-shrink-0">
                <a class="btn btn-danger add-btn" href="{!! route('jabatan.index') !!}">Kembali</a>
              </div>
            </div>
          </div>

          <div class="card-body">
            <form action="{!! route('jabatan.update', $data->id) !!}" method="POST">
              @csrf
              @method('PUT')
              <div class="row">
                <div class="col-12">
                  <div class="mb-3">
                    <label for="Jabatan" class="form-label">Jabatan</label>
                    <input type="text" class="form-control" name="name" id="name" value="{!! old('name', $data->name) !!}" placeholder="Masukkan Jabatan..">

                    @error('name')
                      <div class="mt-1">
                        <span class="text-danger">{{$message}}</span>
                      </div>
                    @enderror
                  </div>
                </div>

                <div class="col-12">
                  <div class="mb-3">
                    <label for="Permission" class="form-label">Hak Akses</label>
                    <select class="js-example-basic-multiple" multiple name="permission[]" id="permission" multiple="multiple">
                      @foreach ($permissions as $p)
                        <option value="{!! $p->id !!}" 
                          @foreach ($data->permissions as $pp)  
                            @if ($p->id == $pp->id)
                              {!! 'selected' !!}
                            @elseif (old('permissions[]'))
                              {!! 'selected' !!}
                            @else
                              {{ '' }}
                            @endif
                          @endforeach
                          >{!! $p->name !!}</option>
                      @endforeach
                    </select>

                    @error('roles')
                      <div class="mt-1">
                        <span class="text-danger">{{$message}}</span>
                      </div>
                    @enderror
                  </div>
                </div>

                <div class="d-grid gap-2">
                  <button class="btn btn-primary" type="submit">Ubah Jabatan</button>
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
    $(document).ready(function() {
      $('.js-example-basic-multiple').select2({
        placeholder: 'Cari Hak-Akses',
        theme: "classic"
      });
    });
  </script>
@endpush
