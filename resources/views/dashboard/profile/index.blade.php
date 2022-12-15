@extends('../../layouts.dashboard')

@section('breadOld', 'Admin')
@section('breadNow', 'Profil')
@section('adminTitle', 'Profil')

@section('adminContent')
    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-pills flex-column flex-md-row mb-3">
              <li class="nav-item">
                <a class="nav-link active" href="{{ route('admin.profile') }}"><i class="bx bx-user me-1"></i> Profil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.password') }}">
                    <i class="bx bx-lock"></i>
                    Ganti Password
                </a>
              </li>
            </ul>
            <div class="card mb-4">
              <h5 class="card-header">Detail Profil</h5>
              <div class="card-body">
                <div class="d-flex align-items-start align-items-sm-center gap-4">
                  <img
                    src="{{asset('admin/assets/img/avatars/1.png')}}"
                    alt="user-avatar"
                    class="d-block rounded"
                    height="100"
                    width="100"
                    id="uploadedAvatar"
                  />
                  <div class="button-wrapper">
                    <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                      <span class="d-none d-sm-block">Ganti Foto Profil</span>
                      <i class="bx bx-upload d-block d-sm-none"></i>
                      <input
                        type="file"
                        id="upload"
                        class="account-file-input"
                        hidden
                        accept="image/png, image/jpeg"
                      />
                    </label>

                    <p class="text-muted mb-0">Format File Harus JPG, GIF Atau PNG. Ukuran Maksimum 800KB</p>
                  </div>
                </div>
              </div>
              <hr class="my-0" />
              <div class="card-body">
                <form id="formAccountSettings" method="POST" onsubmit="return false">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="mb-3 col-md-12">
                      <label for="firstName" class="form-label">Nama Lengkap</label>
                      <input
                        class="form-control"
                        type="text"
                        id="firstName"
                        name="firstName"
                        value="{!! (Auth::user()->name == '') ? ' ' : Auth::user()->name !!}"
                        autofocus
                      />
                    </div>
                    <div class="mb-3 col-md-6">
                      <label for="email" class="form-label">Alamat E-mail</label>
                      <input
                        disabled
                        class="form-control"
                        type="text"
                        id="email"
                        name="email"
                        value="{{ Auth::user()->email }}"
                      />
                    </div>
                    <div class="mb-3 col-md-6">
                      <label class="form-label" for="phoneNumber">Nomor Handphone</label>
                      <div class="input-group input-group-merge">
                        <span class="input-group-text">ID (+62)</span>
                        <input
                          type="text"
                          id="phoneNumber"
                          name="phoneNumber"
                          class="form-control"
                          placeholder="8 xxxx xxxx"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="mt-2">
                    <button type="submit" class="btn btn-primary me-2">Simpan Data</button>
                    <a href="{{ route('dashboard.index') }}" class="btn btn-outline-secondary">Batal</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
    </div>
@endsection