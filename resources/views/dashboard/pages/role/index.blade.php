@extends('dashboard.layout.DashboardLayout')
@push('customCss')
  <!-- SweetAlert -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endpush

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
          <div class="table-responsive">
            <table class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width: 100%" id="tableJabatan">
              <thead>
                <tr>
                  <th width="10px">No</th>
                  <th>Jabatan</th>
                  <th width="100">Hak Akses</th>
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
        data: 'permissions',
        name: 'permissions',
        orderable: false,
        searchable: false,
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

                  url: `/jabatan/${id}`,
                  type: "DELETE",
                  cache: false,
                  data: {
                      "_token": token
                  },
                  success:function(response){ 
                    
                    if(response.status == 403)
                    {
                      //show danger message
                      Swal.fire({
                        type: 'error',
                        icon: 'error',
                        title: `${response.message}`,
                        showConfirmButton: false,
                        timer: 3000
                      });
                    }
                    else if(response.status == 404)
                    {
                      //show info message
                      Swal.fire({
                        type: 'info',
                        icon: 'info',
                        title: `${response.message}`,
                        showConfirmButton: false,
                        timer: 3000
                      });
                    }
                    else
                    {
                      //show success message
                      Swal.fire({
                          type: 'success',
                          icon: 'success',
                          title: `${response.message}`,
                          showConfirmButton: false,
                          timer: 3000
                      });

                       // //remove post on table
                      $('#jabatan' + id).remove();
                      $('#tableJabatan').DataTable().ajax.reload();
                      $('#tableJabatan').DataTable().draw();
                    }
                  },
                  error: function(e) {
                    console.log(e.message);
                  }
              });

              
          }
      })
  });
</script>
@endpush