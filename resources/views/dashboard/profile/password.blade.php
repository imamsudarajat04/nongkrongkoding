@extends('../../layouts.dashboard')

@section('breadOld', 'Admin')
@section('breadNow', 'Password')
@section('adminTitle', 'Password')

@section('adminContent')
    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-pills flex-column flex-md-row mb-3">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.profile') }}"><i class="bx bx-user me-1"></i> Profil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="{{ route('admin.password') }}">
                    <i class="bx bx-lock"></i>
                    Ganti Password
                </a>
              </li>
            </ul>
            <div class="card mb-4">
              <h5 class="card-header">Ganti Password</h5>
              <hr class="my-0" />
              <div class="card-body">
                <form id="formAccountSettings" method="POST" onsubmit="return false">
                  <div class="row">
                    <div class="mb-3 col-md-12">
                      <label for="firstName" class="form-label">Password Lama</label>
                      <input
                        class="form-control"
                        type="password"
                        autofocus
                        placeholder="Masukkan Password Lama"
                      />
                    </div>
                    <div class="mb-3 col-md-6">
                      <label for="email" class="form-label">Password Baru</label>
                      <input
                        class="form-control"
                        type="password"
                        id="email"
                        name="email"
                        placeholder="Masukkan Password Baru"
                      />
                    </div>
                    <div class="mb-3 col-md-6">
                      <label class="form-label" for="phoneNumber">Konfirmasi Password Baru</label>
                      <div class="input-group input-group-merge">
                        <input
                          type="password"
                          id="phoneNumber"
                          name="phoneNumber"
                          class="form-control"
                          placeholder="Masukkan Konfirmasi Password Baru"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="mt-2">
                    <button type="submit" class="btn btn-primary me-2">Ubah</button>
                    <a href="{{ route('dashboard.index') }}" class="btn btn-outline-secondary">Batal</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
    </div>
@endsection