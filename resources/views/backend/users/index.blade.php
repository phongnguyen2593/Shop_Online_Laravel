@extends('backend.layouts.master')

@section('title')
    <div class="breadcome-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcome-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2 style="margin-top: 16px">Quản Lý Thành Viên</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="product-status mg-b-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                        <h4>Danh sách thành viên</h4>
                        @can('create', Auth::user())
                        <div class="add-product">
                            <a href="{{ route('backend.user.create') }}">Thêm thành viên mới</a>
                        </div>
                        @endcan
                        {{-- <div>
                            <div id="toolbar">
                                <select class="form-control">
                                    <option value="">-- Sắp xếp theo --</option>
                                    <option value="all">Tên sản phẩm</option>
                                    <option value="selected" selected>Thời gian cập nhật</option>
                                </select>
                            </div>
                        </div> --}}

                        <table>
                            <tr>
                                <th>Ảnh đại diện</th>
                                <th>Tên</th>
                                <th>Email</th>
                                <th>Chức vụ</th>
                                <th></th>
                            </tr>
                            @foreach ($users as $user)
                                <tr>
                                    <td><img src="" alt="" /></td>
                                    <td><a href="{{ route('backend.user.show', $user->id) }}">{{ $user->name }}</a>
                                    </td>
                                    <td>{{ $user->email }}</td>
                                    @if ($user->role == 1)
                                        <td>Admin</td>
                                    @elseif ($user->role == 2)
                                        <td>Moderator</td>
                                    @elseif ($user->role == 3)
                                        <td>User</td>
                                    @endif

                                    
                                    <td>
                                        @can('update', $user)
                                        <a href="{{ route('backend.user.edit', $user->id) }}"
                                            style="color: white"><button title="Chỉnh sửa" class="pd-setting-ed"><i
                                                    class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                        @endcan
                                        @can('delete', Auth::user())
                                        <button title="Xóa" class="pd-setting-ed btn-delete" data-id="{{ $user->id }}"><i class="fa fa-trash-o"
                                                    aria-hidden="true"></i></button>
                                        @endcan
                                    </td>
                                    
                                    
                                </tr>
                            @endforeach
                        </table>
                        <div class="custom-pagination">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.btn-delete').click(function(e) {
                e.preventDefault();
                let id = $(this).attr('data-id');
                Swal.fire({
                    title: 'Bạn có chắc chắn muốn xóa không ?',
                    text: "Dữ liệu bị xóa không thể phục hồi!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Xóa',
                    cancelButtonText: 'Hủy',
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: 'delete',
                            url: '/admin/user/' + id,
                            success: function(res) {
                                if (!res.error) {
                                    Swal.fire(
                                        'Đã xóa!',
                                        res.message,
                                        'success'
                                    );
                                    location.reload();
                                } else {
                                    console.log(res.message);
                                }
                            }
                        });
                    }
                });
            });
        });

    </script>
@endsection
