@extends('layouts.dashboard')

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
                <form id="formAccountSettings" method="POST" action="{!! route('admin.updatePassword', Auth::user()->id) !!}">
                  @csrf
                  @method('PUT')
                  <div class="row">
                    <div class="mb-3 col-md-12">
                      <label for="firstName" class="form-label">Password Lama</label>
                      <input
                        class="form-control @error('oldPassword') is-invalid @enderror"
                        type="password"
                        autofocus
                        placeholder="Masukkan Password Lama"
                        name="oldPassword"
                        id="oldPassword" />
                      @error('oldPassword')
                          <div class="text-danger">
                            {{ $message }}
                          </div>
                      @enderror
                    </div>
                    <div class="mb-3 col-md-6">
                      <label for="email" class="form-label">Password Baru</label>
                      <input
                        class="form-control @error('password') is-invalid @enderror"
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Masukkan Password Baru" />
                      @error('password')
                          <div class="text-danger">
                            {!! $message !!}
                          </div>
                      @enderror
                    </div>
                    <div class="mb-3 col-md-6">
                      <label class="form-label" for="confirmPassword">Konfirmasi Password Baru</label>
                      <div class="input-group input-group-merge">
                        <input
                          type="password"
                          id="confirmPassword"
                          name="confirmPassword"
                          class="form-control @error('confirmPassword') is-invalid @enderror"
                          placeholder="Masukkan Konfirmasi Password Baru" />
                      </div>
                      @error('confirmPassword')
                        <div class="text-danger">
                          {!! $message !!}
                        </div>
                      @enderror
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