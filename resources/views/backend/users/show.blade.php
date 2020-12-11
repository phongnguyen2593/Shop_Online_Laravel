@extends('backend.layouts.master')
@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumb-->
            <div class="row pt-2 pb-2">
                <div class="col-sm-9">
                    <h4 class="page-title">User Profile</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('backend.index') }}">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('backend.user.index') }}">Người dùng</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Chi tiết</li>
                    </ol>
                </div>
            </div>
            <!-- End Breadcrumb-->

            <div class="row">

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                                <li class="nav-item">
                                    <a href="javascript:void();" data-target="#profile" data-toggle="pill"
                                        class="nav-link active"><i class="icon-user"></i> <span class="hidden-xs">Thông tin
                                            chi tiết</span></a>
                                </li>
                                <li class="nav-item">
                                </li>
                            </ul>
                            <div class="tab-content p-3">
                                <div class="tab-pane active" id="profile">
                                    <div class="row">
                                        <div class="col-lg-3 text-center" >
                                            <h6>Ảnh đại diện</h6>
                                            <img src="{{ asset($user->info->avatar) }}" alt="" style="border-radius: 50%; width:150px">
                                        </div>
                                        <div class="col-lg-9">
                                            <table>
                                                <tr>
                                                    <th>Họ tên:</th>
                                                    <td>{{ $user->info->name }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Email:</th>
                                                    <td>{{ $user->email }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Giới tính:</th>
                                                    <td>{{ ($user->info->gender==1)? 'Nam':'Nữ' }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Địa chỉ:</th>
                                                    <td>{{ $user->info->address }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Số điện thoại:</th>
                                                    <td>{{ $user->info->phone }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Trạng thái:</th>
                                                    @if ($user->status == 1)
                                                        <td class="text-success">Hoạt động</td>
                                                    @else
                                                        <td class="text-danger">Đã khóa</td>
                                                    @endif
                                                </tr>
                                            </table>
                                            @can('update', Auth::user())
                                            <div class="mt-3">
                                                @if ($user->status == 1)
                                                    <button class="btn btn-danger btn-lock" data-id="{{ $user->id }}">Khóa tài khoản</button>
                                                @else
                                                    <button class="btn btn-primary btn-lock" data-id="{{ $user->id }}">Mở khóa</button>
                                                @endif
                                            </div>
                                            @endcan
                                            
                                        </div>
                                    </div>
                                    <!--/row-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--start overlay-->
            <div class="overlay toggle-menu"></div>
            <!--end overlay-->
        </div>
        <!-- End container-fluid-->
    </div>
    <!--End content-wrapper-->
    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
@endsection
@section('head')
    <style>
        th {
            width: 200px;
        }
    </style>
@endsection

@section('script')
    <script>
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
             });
            $('#profile').on('click', '.btn-lock',function(e){
                e.preventDefault();
                var id = $(this).attr('data-id');
                $.ajax({
                    type: 'put',
                    url: '/admin/user/update/' + id,
                    success: function(res) {
                        if (!res.error) {
                            toastr.success('Cập nhật thành công !');
                            $('#profile').load(' #profile');
                        } else {
                            toastr.error('Cập nhật thất bại !');
                        }
                    }
                });
            });
        });
    </script>    
@endsection
