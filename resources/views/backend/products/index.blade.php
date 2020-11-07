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
                                    <h2 style="margin-top: 16px">Quản Lý Sản Phẩm</h2>
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
                    <h4>Danh sách sản phẩm</h4>
                    <div class="add-product">
                        <a href="{{ route('backend.product.create') }}">Thêm sản phẩm mới</a>
                    </div>
                    <div>
                        <div id="toolbar">
                            <select class="form-control">
                                <option value="">-- Sắp xếp theo --</option>
                                <option value="all">Tên sản phẩm</option>
                                <option value="selected" selected>Thời gian cập nhật</option>
                            </select>
                        </div>
                    </div>

                    <table>
                        <tr>
                            <th>Ảnh nhỏ</th>
                            <th>Tên</th>
                            <th>Giá nhập</th>
                            <th>Số Lượng</th>
                            <th>Giá gốc</th>
                            <th>%</th>
                            <th>Giá bán</th>
                            <th></th>
                        </tr>
                        @foreach ($products as $product)
                        <tr>
                            <td><img src="/backend/dashboard/img/new-product/5-small.jpg" alt="" /></td>
                            <td>{{ $product->name }}</td>
                            <td>0</td>
                            <td>{{ $product->quantity }}</td>
                            <td>{{ $product->origin_price }}</td>
                            <td>{{ $product->discount_percent }}</td>
                            <td>{{ $product->sale_price }}</td>
                            <td>
                                <button data-toggle="tooltip" title="Chỉnh sửa" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                <button data-toggle="tooltip" title="Xóa" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
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