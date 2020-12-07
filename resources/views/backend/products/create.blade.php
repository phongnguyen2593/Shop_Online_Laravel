@extends('backend.layouts.master')

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumb-->
            <div class="row pt-2 pb-2">
                <div class="col-sm-9">
                    <h4 class="page-title">Quản lý sản phẩm</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('backend.index') }}">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('backend.product.index') }}">Sản phẩm</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Thêm mới</li>
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
                            <div class="card-title">Thêm mới sản phẩm</div>
                            <hr>
                            <form method="POST" action="{{ route('backend.product.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label for="product_name" class="col-sm-2 col-form-label">Tên sản phẩm</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-rounded" id="product_name"
                                            placeholder="Nhập tên sản phẩm" name="name" value="{{ old('name') }}">
                                        @error('name')
                                            <label for="name" class="error">&nbsp {{ $message }}</label>
                                        @enderror
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label for="brand" class="col-sm-2 col-form-label">Thương hiệu</label>
                                    <div class="col-sm-10">
                                        <select class="form-control form-control-rounded" id="brand" name="brand_id">
                                            <option value="">-- Chọn thương hiệu --</option>
                                            @foreach ($allBrands as $value)
                                                <option value="{{ $value->id }}"
                                                    {{ old('brand_id') == $value->id ? 'selected' : '' }}>
                                                    {{ $value->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('brand_id')
                                            <label for="brand_id" class="error">&nbsp {{ $message }}</label>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="category_id" class="col-sm-2 col-form-label">Danh mục</label>
                                    <div class="col-sm-10">
                                        <select class="form-control form-control-rounded" id="category_id"
                                            name="category_id">
                                            <option value="">-- Chọn danh mục --</option>
                                            @foreach ($allCategories as $value)
                                                <option value="{{ $value->id }}"
                                                    {{ old('category_id') == $value->id ? 'selected' : '' }}>
                                                    {{ $value->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <label for="category_id" class="error">&nbsp {{ $message }}</label>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="product_thumbnail" class="col-sm-2 col-form-label">Hình ảnh hiển
                                        thị</label>
                                    <div class="col-sm-10">
                                        <div class="input-group mb-3" id="thumbnail">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="product_thumbnail"
                                                    name="thumbnail">
                                                <label class="custom-file-label" for="product_thumbnail">Chọn ảnh</label>
                                            </div>
                                        </div>
                                        @error('thumbnail')
                                            <label for="thumbnail" class="error">&nbsp {{ $message }}</label>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="product_images" class="col-sm-2 col-form-label">Hình ảnh mô tả</label>
                                    <div class="col-sm-10">
                                        <div class="input-group mb-3" id="product_images">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="select_product_images"
                                                    name="images[]" multiple>
                                                <label class="custom-file-label" for="product_images">Chọn ảnh</label>
                                            </div>
                                        </div>
                                        @error('images[]')
                                            <label for="thumbnail" class="error">&nbsp {{ $message }}</label>
                                        @enderror
                                        <div id="show_product_images" class="row"></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="description" class="col-sm-2 col-form-label">mô tả</label>
                                    <div class="col-sm-10" id="summernoteEditor"></div>
                                </div>
                                <div class="form-group row">
                                    <label for="quantity" class="col-sm-2 col-form-label">Số lượng</label>
                                    <div class="col-sm-3">
                                        <input type="number" class="form-control form-control-rounded" id="quantity"
                                            placeholder="Nhập số lượng" name="quantity" value="{{ old('quantity') }}">
                                        @error('quantity')
                                            <label for="quantity" class="error">&nbsp {{ $message }}</label>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="origin_price" class="col-sm-2 col-form-label">Giá gốc</label>
                                    <div class="col-sm-3">
                                        <input type="number" class="form-control form-control-rounded" id="origin_price"
                                            placeholder="Nhập giá gôc" name="origin_price"
                                            value="{{ old('origin_price') }}">
                                        @error('origin_price')
                                            <label for="quantity" class="error">&nbsp {{ $message }}</label>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="sale_price" class="col-sm-2 col-form-label">Giá bán</label>
                                    <div class="col-sm-3">
                                        <input type="number" class="form-control form-control-rounded" id="sale_price"
                                            placeholder="Nhập giá bán" name="sale_price" value="{{ old('sale_price') }}">
                                        @error('sale_price')
                                            <label for="sale_price" class="error">&nbsp {{ $message }}</label>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="discount_percent" class="col-sm-2 col-form-label">Phần trăm giảm giá</label>
                                    <div class="col-sm-3">
                                        <input type="number" class="form-control form-control-rounded" id="discount_percent"
                                            placeholder="Nhập phần trăm giảm giá" name="discount_percent"
                                            value="{{ old('discount_percent') }}">
                                        @error('discount_percent')
                                            <label for="sale_price" class="error">&nbsp {{ $message }}</label>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="status" class="col-sm-2 col-form-label">Trạng thái sản phẩm</label>
                                    <div class="col-sm-3">
                                        <select class="form-control form-control-rounded" id="status" name="status">
                                            <option value="1" {{ (old('status')==1)? 'selected': ''}}>Còn hàng</option>
                                            <option value="0" {{ (old('status')==0)? 'selected': ''}}>Hết hàng</option>
                                            <option value="-1" {{ (old('status')==-1)? 'selected': ''}}>Ngừng kinh doanh</option>
                                        </select>
                                        @error('status')
                                            <label for="status" class="error">&nbsp {{ $message }}</label>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-white btn-round px-5"><i class="icon-lock"></i>
                                            Thêm mới</button>
                                        <button type="reset" class="btn btn-white btn-round px-5"><i class="icon-lock"></i>
                                            Xóa dữ liệu</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
            <!--End Row-->
            <!--start overlay-->
            <div class="overlay toggle-menu"></div>
            <!--end overlay-->
        </div>
        <!-- End container-fluid-->
    </div>
@endsection

@section('script')
    <script src="/backend/dashboard/assets/plugins/summernote/dist/summernote-bs4.min.js"></script>
    <script>
        $('#summernoteEditor').summernote({
            height: 250,
            tabsize: 2,
        });

    </script>
    <script>
        function previewThumbnail(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(event) {
                    $('#thumbnail + img').remove();
                    $('#thumbnail').after('<img src="' + event.target.result + '" alt="" height="200px">');
                };
                reader.readAsDataURL(input.files[0]);
            };
        }

        function previewMultipleImages(input) {
            if (input.files) {
                var length = input.files.length;
                for (let i = 0; i < length; i++) {
                    var reader = new FileReader();
                    reader.onload = function(event) {
                        $('#show_product_images').append('<div class="col-sm-2"><img src="' + event.target.result +
                            '"><p class="btn btn-danger remove">delete</p></div>'
                        );
                        $('.remove').click(function() {
                            $(this).parent().remove();
                        });
                    };
                    reader.readAsDataURL(input.files[i]);
                }
                console.log(input.files);
            };
        }

        $('#product_thumbnail').change(function() {
            previewThumbnail(this);
        });
        $('#select_product_images').change(function() {
            previewMultipleImages(this);
        });

    </script>
@endsection

@section('head')
    <link rel="stylesheet" href="/backend/dashboard/assets/plugins/summernote/dist/summernote-bs4.css" />
    <style>
        #show_product_images p {
            margin-left: 20%;
            margin-bottom: 0px;
        }

        #show_product_images img {
            width: 100%;
        }

        .note-editor,
        .note-frame {
            margin-left: 15px;
            width: 81%;
        }

    </style>
@endsection
