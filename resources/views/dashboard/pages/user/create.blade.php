@extends('dashboard.layout.DashboardLayout')
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

          </div>
        </div>
      </div>
    </div>
@endsection