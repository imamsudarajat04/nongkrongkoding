@extends('dashboard.layout.DashboardLayout')
@section('title', 'Halaman Pengguna')
@section('showMenu', 'show')
@section('pengguna', 'active')

@section('pageTitle', 'Pengguna')

@section('breadcrumb')
  <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
  <li class="breadcrumb-item">Data Pengguna</li>
  <li class="breadcrumb-item active">Pengguna</li>
@endsection

@section('content')
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <div class="d-flex align-items-center">
            <h5 class="card-title mb-0 flex-grow-1">Daftar Pengguna</h5>

            @can('pengguna_create')  
              <div class="flex-shrink-0">
                <a class="btn btn-primary add-btn" href="{!! route('pengguna.create') !!}">Tambah Pengguna</a>
              </div>
            @endcan
          </div>
        </div>

        <div class="card-body">
          <table class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width: 100%" id="tablePengguna">
            <thead>
              <tr>
                <th width="70px">No</th>
                <th>Nama Lengkap</th>
                <th>Email</th>
                <th>Nomor Handphone</th>
                <th>Avatar</th>
                <th width="150px">Aksi</th>
              </tr>
            </thead>
            <tbody>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('customJs')
  <script>
    $('#tablePengguna').DataTable({
      processing: true,
      serverSide: true,
      ordering: true,
      ajax: '{!! url()->current() !!}',
      order: [
        [1, 'asc']
      ],
      columns: [
        {
          data: 'DT_RowIndex',
          name: 'DT_RowIndex',
          width: '1%',
          orderable: false,
          searchable: false,
        },
        {
          data: 'name',
          name: 'name',
        },
        {
          data: 'email',
          name: 'email',
        },
        {
          data: 'telphone',
          name: 'telephone',
        },
        {
          data: 'avatar',
          name: 'avatar',
        },
        {
            data: 'action',
            name: 'action',
            orderable: false,
            searchable: false,
            width: '1%'
        }
      ]
    });
  </script>
@endpush