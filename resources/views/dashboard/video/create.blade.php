@extends('dashboard.layout.dashboard')

@section('adminTitle', 'Dashboard | Tambah-Video')
@section('video', 'active open')
@section('indexVideo', 'active')

@section('breadOld', 'Video')
@section('breadNow', 'Tambah Video')

@section('adminContent')

<div class="row">
    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Form Tambah Video</h5>
            </div>

            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label" for="name-video">Nama Video</label>
                        <input name="name" type="text" class="form-control" id="name-video" placeholder="Nama Video" />
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="image-video">Image Video</label>
                        <input name="image" class="form-control" type="file" id="image-video">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="thumbnail">Thumbnail</label>
                        <input name="thumbnail" class="form-control" type="file" id="thumbnail">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="description">Deskripsi Video</label>
                        <input name="description" type="text" id="description" class="form-control" placeholder="Masukkan Deskripsi Video"/>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="link-youtube">Link Youtube</label>
                        <input type="url" name="linkYoutube" id="link-youtube" class="form-control" placeholder="Masukkan Link YouTube"></input>
                    </div>

                    <div class="mb-3">
                        <label for="select-category" class="form-label">Pilih Kategori Video</label>
                        <select id="select-category" class="form-select">
                            <option>-- Pilih Kategori Video --</option>
                            <option value="Laravel">One</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Harga Produk</label>
                        <input type="text" name="price" id="price" placeholder="Masukkan Harga Produk" class="form-control">
                    </div>

                    <a href="{{ route('category.index') }}" class="btn btn-danger float-center">Batal</a>
                    <button type="submit" class="btn btn-primary float-end">Send</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection