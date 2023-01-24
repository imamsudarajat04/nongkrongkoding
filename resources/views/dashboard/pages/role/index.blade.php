@extends('dashboard.layout.DashboardLayout')

@section('title', 'Halaman Jabatan')
@section('showMenu', 'show')
@section('jabatan', 'active')

@section('pageTitle', 'Jabatan')

@section('breadcrumb')
  <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
  <li class="breadcrumb-item active">Data Jabatan</li>
@endsection

@section('content')
  <div class="row">
    <div class="col-lg-12">
      <div class="card">

        <div class="card-header">
          <div class="d-flex align-items-center">
            <h5 class="card-title mb-0 flex-grow-1">Daftar Pengguna</h5>

            @can('jabatan_create')  
              <div class="flex-shrink-0">
                <a class="btn btn-primary add-btn" href="{!! route('jabatan.create') !!}">Tambah Jabatan</a>
              </div>
            @endcan
          </div>
        </div>

        <div class="card-body">
          <table class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width: 100%" id="tableJabatan">
            <thead>
              <tr>
                <th width="70px">No</th>
                <th>Jabatan</th>
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
  $('#tableJabatan').DataTable({
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
        data: 'action',
        name: 'action',
        orderable: false,
        searchable: false,
        width: '1%',
      }
    ],
    sDom: '<"secondBar d-flex flex-w1rap justify-content-between mb-2";f>rt<"bottom"p>',
    "fnCreatedRow": function(nRow, data) {
      $(nRow).attr('id', 'jabatan' + data.id);
    },
  });
</script>
@endpush