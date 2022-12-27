@extends('dashboard.layout.dashboard')

@section('dashboard', 'active')
@section('breadOld', 'Admin')
@section('breadNow', 'Dashboard')
@section('adminTitle', 'Dashboard')

@section('adminContent')
    <div class="row">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                                <h5 class="card-title text-primary">Selamat Datang {!! (Auth::user()->name == '') ? 'Anonym' : Auth::user()->name !!} ! 🎉</h5>
                                <p class="mb-4">
                                    Tambah konten baru dan video agar pengguna lebih tertarik dengan konten yang beragam
                                </p>
                            <a href="#" class="btn btn-sm btn-outline-primary">Tambah Video</a>
                        </div>
                    </div>

                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img src="{{ asset('admin/assets/img/illustrations/man-with-laptop-light.png') }}" height="140"
                            alt="View Badge User"
                            data-app-dark-img="illustrations/man-with-laptop-dark.png"
                            data-app-light-img="illustrations/man-with-laptop-light.png"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-4 order-1">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="{{ asset('admin/assets/icons/user.png') }}" alt="Credit Card" class="rounded" />
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt6"
                                        data-bs-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                        >
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                        <a class="dropdown-item" href="#">Lihat Data</a>
                                        <a class="dropdown-item" href="#">Tambah Admin</a>
                                    </div>
                                </div>
                            </div>
                            <span>Admin</span>
                            <h3 class="card-title text-nowrap mb-1">{{ $user }} Admin</h3>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="{{ asset('admin/assets/icons/user.png') }}" alt="Credit Card" class="rounded" />
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt6"
                                        data-bs-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                        >
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                        <a class="dropdown-item" href="#">Lihat Data</a>
                                        <a class="dropdown-item" href="#">Tambah Pengguna</a>
                                    </div>
                                </div>
                            </div>
                            <span>Pengguna</span>
                            <h3 class="card-title text-nowrap mb-1">{{ $user }} Pengguna</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-4 order-1">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="{{ asset('admin/assets/icons/video.png') }}" alt="Credit Card" class="rounded" />
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt6"
                                        data-bs-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                        >
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                        <a class="dropdown-item" href="#">Tambah Video</a>
                                    </div>
                                </div>
                            </div>
                            <span>Video</span>
                            <h3 class="card-title text-nowrap mb-1">{{ $video }} Video</h3>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="{{ asset('admin/assets/icons/kategori.png') }}" alt="Credit Card" class="rounded" />
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt6"
                                        data-bs-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                        >
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                        <a class="dropdown-item" href="#">Tambah Kategori</a>
                                        <a class="dropdown-item" href="#">Lihat Kategori</a>
                                    </div>
                                </div>
                            </div>
                            <span>Kategori</span>
                            <h3 class="card-title text-nowrap mb-1">{{ $category }} kategori</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection