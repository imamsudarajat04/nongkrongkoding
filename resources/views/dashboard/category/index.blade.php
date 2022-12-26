@extends('dashboard.layout.dashboard')

@section('adminTitle', 'Admin | Kategori-Video')
@section('video', 'active')

@section('breadOld', 'Video')
@section('breadNow', 'Kategori-Video')

@section('adminContent')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-header">Daftar Video & Kategori</div>

            <div class="table-responsive text-nowrap">
                <table class="table table-striped table-bordered dt-responsive nowrap w-100 display" id="table-category">
                    <thead>
                        <tr class="text-nowrap">
                        <th>No</th>
                        <th>Nama Kategori</th>
                        <th>Nama Video</th>
                        <th>Link</th>
                        <th colspan="2">Aksi</th>
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