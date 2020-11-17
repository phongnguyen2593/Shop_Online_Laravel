@extends('backend.layouts.master')

@section('css')
    <style>
        label { color: #fff; }
        #name { width: 208%; }
        #thumbnail { width: 167%; }
        #images { width: 141%; }
        #quantity { width: 106%;}
        #origin-price, #sale-price { width: 109%;}
    </style>
@endsection

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
    <div class="single-product-tab-area mg-b-30">
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="review-tab-pro-inner">
                            <ul id="myTab3" class="tab-review-design">
                                <li class="active"><a href="#description"><i class="fa fa-plus" aria-hidden="true"></i> Thêm
                                        mới</a></li>
                            </ul>

                            <form action="{{ route('backend.product.store') }}" method="POST" role="form" enctype="multipart/form-data">
                                @csrf
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                        <div class="row mg-b-pro-edt">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="input-group">
                                                        <label for="#name">Tên sản phẩm</label>
                                                        <input id="name" type="text" class="form-control"
                                                            name="name" value="{{ old('name') }}">
                                                    </div>
                                                    @error('name')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mg-b-pro-edt">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <label for="#category">Danh mục</label>
                                                    <select id="category" name="category_id"
                                                        class="form-control pro-edt-select form-control-primary ">
                                                        <option>-- Chọn danh mục --</option>
                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}">{{ $category->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('category_id')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mg-b-pro-edt">
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="input-group">
                                                         <label for="#thumbnail">Ảnh nhỏ</label>
                                                        <input type="file" id="thumbnail"  class="form-control"
                                                            name="thumbnail">
                                                    </div>
                                                    @error('thumbnail')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mg-b-pro-edt">
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="input-group">
                                                         <label for="#images">Ảnh cho sản phẩm</label>
                                                        <input type="file" id="images"  class="form-control"
                                                            name="images[]" multiple>
                                                    </div>
                                                    @error('images[]')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <label for="#status">Trạng thái</label>
                                                    <select name="status"
                                                        class="form-control pro-edt-select form-control-primary" id="status">
                                                        <option value="">-- Chọn trạng thái --</option>
                                                        <option value="0">Hết hàng</option>
                                                        <option value="1">Còn hàng</option>
                                                        <option value="-1">Ngừng kinh doanh</option>
                                                    </select>
                                                    @error('status')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                                <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt">
                                                        <label for="#quantity">Số lượng</label>
                                                        <input type="number" id="quantity" class="form-control" 
                                                            name="quantity" value="{{ old('quantity') }}">
                                                    </div>
                                                    @error('quantity')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt">
                                                        <label for="#origin-price">Giá gốc</label>
                                                        <input type="number" class="form-control" id="origin-price"
                                                            name="origin_price" value="{{ old('origin_price') }}">
                                                    </div>
                                                    @error('origin_price')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt">
                                                        <label for="#sale-price">Giá bán</label>
                                                        <input type="number" class="form-control" id="sale-price"
                                                            name="sale_price" value="{{ old('sale_price') }}">
                                                    </div>
                                                    @error('sale_price')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                <div class="review-content-section">
                                                    <label for="#discount_percent">Phần trăm giảm giá (%)</label>
                                                    <input type="number" class="form-control" name="discount_percent" value="{{ old('discount_percent') }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="">
                                                        <label for="#ckeditor">Mô tả sản phẩm</label>
                                                        <textarea name="content" id="ckeditor"
                                                            style="background-color: #152036; color: white; width: 100%"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-center custom-pro-edt-ds">
                                                    <button type="submit"
                                                        class="btn btn-ctl-bt waves-effect waves-light m-r-10">Tạo mới
                                                    </button>
                                                    <button type="reset" class="btn btn-ctl-bt waves-effect waves-light">Xóa
                                                        dữ liệu
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
