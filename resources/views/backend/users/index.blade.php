@extends('backend.layouts.master')

@section('head')
    <link href="/backend/dashboard/assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        type="text/css">
    <link href="/backend/dashboard/assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css" rel="stylesheet"
        type="text/css">
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumb-->
            <div class="row pt-2 pb-2">
                <div class="col-sm-9">
                    <h4 class="page-title">Data Tables</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('backend.index') }}">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Danh sách người dùng</li>
                    </ol>
                </div>
                <div class="col-sm-3">
                    <div class="btn-group float-sm-right">
                        <button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-cog mr-1"></i>
                            Setting</button>
                        <button type="button"
                            class="btn btn-light dropdown-toggle dropdown-toggle-split waves-effect waves-light"
                            data-toggle="dropdown">
                            <span class="caret"></span>
                        </button>
                        <div class="dropdown-menu">
                            <a href="javaScript:void();" class="dropdown-item">Action</a>
                            <a href="javaScript:void();" class="dropdown-item">Another action</a>
                            <a href="javaScript:void();" class="dropdown-item">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a href="javaScript:void();" class="dropdown-item">Separated link</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Breadcrumb-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="user-datatable" class="table table-bordered" style="width: 100% !important">
                                    <thead>
                                        <tr>
                                            <th>Tên</th>
                                            <th>Email</th>
                                            <th>Giới tính</th>
                                            <th>Quyền</th>
                                            <th>Hành động</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Row-->

            <!--start overlay-->
            <div class="overlay toggle-menu"></div>
            <!--end overlay-->
        </div>
    @endsection

    @section('script')
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script src="sweetalert2.all.min.js"></script>
        <!--Data Tables js-->
        <script src="/backend/dashboard/assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js"></script>
        <script src="/backend/dashboard/assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js"></script>
        <script src="/backend/dashboard/assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js"></script>
        <script src="/backend/dashboard/assets/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js"></script>
        <script src="/backend/dashboard/assets/plugins/bootstrap-datatable/js/jszip.min.js"></script>
        <script src="/backend/dashboard/assets/plugins/bootstrap-datatable/js/pdfmake.min.js"></script>
        <script src="/backend/dashboard/assets/plugins/bootstrap-datatable/js/vfs_fonts.js"></script>
        <script src="/backend/dashboard/assets/plugins/bootstrap-datatable/js/buttons.html5.min.js"></script>
        <script src="/backend/dashboard/assets/plugins/bootstrap-datatable/js/buttons.print.min.js"></script>
        <script src="/backend/dashboard/assets/plugins/bootstrap-datatable/js/buttons.colVis.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                //Default data table
                $('#user-datatable').DataTable({
                    processing: true,
                    serverSide: true,
                    "order": [[ 3, "desc" ]], 
                    ajax: "{{ route('backend.user.data') }}",
                    columns: [{
                            data: 'name',
                            name: 'name'
                        },
                        {
                            data: 'email',
                            name: 'email'
                        },
                        {
                            data: 'gender',
                            name: 'gender'
                        },
                        {
                            data: 'role',
                            name: 'role'
                        },
                        {
                            data: 'action',
                            name: 'action',
                            orderable: true,
                            searchable: true
                        },
                    ]
                });

                $(document).on('click', '.btn-delete', function(e) {
                    const id = $(e.currentTarget).data('id');
                    Swal.fire({
                        title: 'Bạn có chắc chắn muốn xóa không ?',
                        text: "Dữ liệu bị xóa không thể phục hồi!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Đồng ý',
                        cancelButtonText: "Hủy",
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                type: 'put',
                                url: '/admin/user/0' + id,
                                success: function(res) {
                                    if (!res.error) {
                                        toastr.success('Xóa thành công');
                                    $('#user-datatable').DataTable().ajax.reload(null, false);
                                    } else {
                                        toastr.error('Xóa thất bại');
                                    }
                                }
                            });
                        }
                    })
                });
            });

        </script>
        <script>
            @if(Session::has('success')) 
                toastr.success('{{ Session::get('success') }}'); 
            @endif
        </script>
    @endsection
