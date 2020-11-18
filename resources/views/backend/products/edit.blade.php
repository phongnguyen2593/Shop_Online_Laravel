@extends('backend.layouts.master')

@section('css')
    <style>
        label {
            color: #fff;
        }
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
                                <li class="active"><a href="#description"><i class="fa fa-pencil" aria-hidden="true"></i>
                                        Chỉnh sửa</a></li>
                            </ul>

                            <form action="{{ route('backend.product.update', $product->id) }}" method="POST" role="form" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                        <div class="row mg-b-pro-edt">
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="input-group">
                                                        <label for="#name">Tên sản phẩm</label>
                                                        <input id="name" type="text" class="form-control"
                                                            name="name" value="{{ $product->name }}">
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
                                                        <option  value="">-- Chọn danh mục --</option>
                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}" @if ($product->category_id == $category->id) selected @endif>
                                                                {{ $category->name }}
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
                                                            name="images[]">
                                                    </div>
                                                    @error('images')
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
                                                        <option value="0" @if ($product->status == 0) selected @endif>Hết hàng</option>
                                                        <option value="1" @if ($product->status == 1) selected @endif>Còn hàng</option>
                                                        <option value="-1" @if ($product->status == 2) selected @endif>Ngừng kinh doanh</option>
                                                    </select>
                                                    @error('status')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt">
                                                        <label for="#quantity">Số lượng</label>
                                                        <input type="number" id="quantity" class="form-control" 
                                                            name="quantity" value="{{ $product->quantity }}">
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
                                                        <label for="#origin_price">Giá gốc</label>
                                                        <input type="number" class="form-control" id="origin_price"
                                                            name="origin_price" value="{{ $sale->origin_price }}">
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
                                                            name="sale_price" value="{{ $sale->sale_price }}">
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
                                                    <label for="#discount_percent">Phần trăm giảm giá</label>
                                                    <select name="discount_percent" id="discount_percent"
                                                        class="form-control pro-edt-select form-control-primary mg-b-pro-edt">
                                                        <option value="">-- Chọn phần trăm giảm giá --</option>
                                                        <option value="5">5%</option>
                                                        <option value="10">10%</option>
                                                        <option value="15">15%</option>
                                                        <option value="20">20%</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="">
                                                        <label for="#ckeditor">Mô tả sản phẩm</label>
                                                        <textarea name="content" id="ckeditor"
                                                            style="background-color: #152036; color: white; width: 100%">{{ $product->content }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-center custom-pro-edt-ds">
                                                    <button type="submit"
                                                        class="btn btn-ctl-bt waves-effect waves-light m-r-10">Lưu
                                                    </button>
                                                    <a href="{{ route('backend.product.index') }}" style="color: white">
                                                        <button type="button"
                                                            class="btn btn-ctl-bt waves-effect waves-light">Hủy
                                                        </button>
                                                    </a>
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
