@extends('dashboard.layout.DashboardLayout')
@push('customCss')
  <style>
  .image-wrapper {
    height: 100px;
    width: 100px;
  }

  .image-wrapper .image {
      border-radius: 8px;
      width: 100%;
      height: 100%;
      background-position: center;
      background-size: cover;
      background-repeat: no-repeat;
  }
  </style>

  <!-- SweetAlert -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endpush
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
          <div class="table-responsive">
            <table class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width: 100%" id="tablePengguna">
              <thead>
                <tr>
                  <th width="70px">No</th>
                  <th>Nama Lengkap</th>
                  <th>Email</th>
                  <th>Nomor Handphone</th>
                  <th>Avatar</th>
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
          orderable: false,
        },
        {
          data: 'telphone',
          name: 'telephone',
          orderable: false,
        },
        {
          data: 'avatar',
          name: 'avatar',
          orderable: false,
          searchable: false,
        },
        {
          data: "roles[0].name",
          name: "roles",
          orderable: false,
          searchable: false,
        },
        {
            data: 'action',
            name: 'action',
            orderable: false,
            searchable: false,
            width: '1%'
        }
      ],
      sDom: '<"secondBar d-flex flex-w1rap justify-content-between mb-2"lf>rt<"bottom"p>',
      "fnCreatedRow": function(nRow, data) {
          $(nRow).attr('id', 'pengguna' + data.id);
      },
    });

    $(document).on('click', '#btn-hapus', function () {
      let id = $(this).data('id');
      let token = $("meta[name='csrf-token']").attr("content");

      Swal.fire({
          title: 'Apakah Kamu Yakin?',
          text: "ingin menghapus data ini!",
          icon: 'warning',
          showCancelButton: true,
          cancelButtonText: 'TIDAK',
          confirmButtonText: 'YA, HAPUS!'
      }).then((result) => {
          if (result.isConfirmed) {

              //fetch to delete data
              $.ajax({

                  url: `/data/pengguna/${id}`,
                  type: "DELETE",
                  cache: false,
                  data: {
                      "_token": token
                  },
                  success:function(response){ 

                      //show success message
                      Swal.fire({
                          type: 'success',
                          icon: 'success',
                          title: `${response.message}`,
                          showConfirmButton: false,
                          timer: 3000
                      });

                      //remove post on table
                      $('#pengguna' + id).remove();
                      $('#tablePengguna').DataTable().ajax.reload();
                      $('#tablePengguna').DataTable().draw();
                  }
              });

              
          }
      })

    });
  </script>
@endpush