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
                                        <i class="fa fa-cube"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2 style="margin-top: 16px">Quản Lý Danh Mục</h2>
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
                        <h4>Danh sách danh mục</h4>
                        <div class="add-product">
                            <a href="{{ route('backend.category.create') }}">Thêm danh mục mới</a>
                        </div>
                        <div>
                            <div id="toolbar">
                                <label for="#sort-by" style="color: #fff">Sắp xếp theo</label>
                                <select class="form-control" id="sort-by">
                                    <option value="all" selected>Tên danh mục</option>
                                    <option value="selected">Thời gian cập nhật</option>
                                </select>
                            </div>
                        </div>

                        <table>
                            <tr>
                                <th>Ảnh nhỏ</th>
                                <th>Tên</th>
                                <th>Danh mục cha</th>
                                <th></th>
                            </tr>
                            @foreach ($categories as $category)
                                <tr>
                                    <td><img src="/backend/dashboard/img/new-product/5-small.jpg" alt="" /></td>
                                    <td>{{ $category->name }}</td>
                                    <td>
                                        @foreach ($categories as $cate)
                                            @if ($category->parent_id == $cate->id)
                                                {{ $cate->name }}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        <a href="{{ route('backend.category.edit', $category->id) }}"
                                            style="color: white"><button title="Chỉnh sửa" class="pd-setting-ed"><i
                                                    class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                        <button title="Xóa" class="pd-setting-ed btn-delete"
                                            data-id="{{ $category->id }}"><i class="fa fa-trash-o"
                                                aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
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
                    cancelButtonText: 'Đóng',
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: 'delete',
                            url: '/admin/category/' + id,
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
