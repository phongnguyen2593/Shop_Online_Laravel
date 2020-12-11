@extends('backend.layouts.master')

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumb-->
            <div class="row pt-2 pb-2">
                <div class="col-sm-9">
                    <h4 class="page-title">Thông tin sản phẩm</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('backend.index') }}">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('backend.product.index') }}">Sản phẩm</a></li>
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
                                        class="nav-link active"><i class="icon-layers"></i> <span class="hidden-xs">Thông
                                            tin
                                            chi tiết</span></a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void();" data-target="#images" data-toggle="pill"
                                        class="nav-link"><i class="icon-note"></i> <span class="hidden-xs">Hình ảnh</span></a>
                                </li>
                            </ul>
                            <div class="tab-content p-3">
                                <div class="tab-pane active" id="profile">
                                    <form id="form-update" action="{{ route('backend.product.update', $product->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label">Tên sản phẩm</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" type="text" name="name" id="name"
                                                    value="{{ $product->name }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="category_id" class="col-sm-3 col-form-label">Danh mục</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" id="category_id" name="category_id">
                                                    @foreach ($allCategories as $category)
                                                        <option value="{{ $category->id }}"
                                                            {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                                            {{ $category->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="brand" class="col-sm-3 col-form-label">Thương hiệu</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" id="brand" name="brand_id">
                                                    @foreach ($allBrands as $value)
                                                        <option value="{{ $value->id }}"
                                                            {{ $product->brand_id == $value->id ? 'selected' : '' }}>
                                                            {{ $value->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label">Số lượng</label>
                                            <div class="col-lg-3">
                                                <input class="form-control" type="text" name="quantity"
                                                    value="{{ $product->quantity }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label">Giá gốc</label>
                                            <div class="col-lg-3">
                                                <input class="form-control" type="text" name="origin_price"
                                                    value="{{ $product->origin_price }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label">Giá bán</label>
                                            <div class="col-lg-3">
                                                <input class="form-control" type="text" name="sale_price"
                                                    value="{{ $product->sale_price }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label">Phần trăm giảm
                                                giá</label>
                                            <div class="col-lg-3">
                                                <input class="form-control" type="text" name="discount_percent"
                                                    value="{{ $product->discount_percent }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="status" class="col-lg-3 col-form-label form-control-label">Trạng
                                                thái sản phẩm</label>
                                            <div class="col-lg-3">
                                                <select class="form-control" id="status" name="status">
                                                    <option value="1" {{ $product->status == 1 ? 'selected' : '' }}>Còn hàng
                                                    </option>
                                                    <option value="0" {{ $product->status == 0 ? 'selected' : '' }}>Hết hàng
                                                    </option>
                                                    <option value="-1" {{ $product->status == -1 ? 'selected' : '' }}>Ngừng
                                                        kinh doanh</option>
                                                </select>
                                                @error('status')
                                                    <label for="status" class="error">&nbsp {{ $message }}</label>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label"></label>
                                            <div class="col-lg-9">
                                                <input type="submit" class="btn btn-primary" id="btn-update"
                                                    data-id="{{ $product->id }}" value="Lưu">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane" id="images">
                                    <form action="" method="POST">

                                    </form>
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

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="sweetalert2.all.min.js"></script>

    <script>
        @if (Session::has('success')) 
            toastr.success('{{ Session::get('success') }}');
        
        @endif 
    </script>
@endsection
