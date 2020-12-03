@extends('backend.layouts.master')

@section('content')
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
                                    <a href="javascript:void();" data-target="#edit" data-toggle="pill" class="nav-link"><i
                                            class="icon-note"></i> <span class="hidden-xs">Chỉnh sửa</span></a>
                                </li>
                            </ul>
                            <div class="tab-content p-3">
                                <div class="tab-pane active" id="profile">
                                    <h5 class="mb-3"></h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6>Tên sảm phẩm</h6>
                                            <p>
                                                {{ $product->name }}
                                            </p>
                                            <h6>Danh mục</h6>
                                            <p>
                                                {{ $product->category->name }}
                                            </p>
                                            <h6>Hãng sản xuất</h6>
                                            <p>
                                                {{-- {{ $product->brand()->name }}
                                                --}}
                                                -
                                            </p>
                                            <h6>Số lượng</h6>
                                            <p>
                                                {{ number_format($product->quantity) }}
                                            </p>
                                            <h6>Giá gốc</h6>
                                            <p>
                                                {{ number_format($product->sale->origin_price) }}
                                            </p>
                                            <h6>Giá bán</h6>
                                            <p>
                                                {{ number_format($product->sale->sale_price) }}
                                            </p>
                                            <h6>Mô tả</h6>
                                            <p>
                                                {{ $product->description ? $product->description : 'Không có mô tả' }}
                                            </p>

                                        </div>
                                        <div class="col-md-6">
                                            <h6>Hình ảnh</h6>
                                            <a href="javascript:void();" class="badge badge-dark badge-pill">html5</a>
                                            <a href="javascript:void();" class="badge badge-dark badge-pill">react</a>
                                            <a href="javascript:void();" class="badge badge-dark badge-pill">codeply</a>
                                            <a href="javascript:void();" class="badge badge-dark badge-pill">angularjs</a>
                                            <a href="javascript:void();" class="badge badge-dark badge-pill">css3</a>
                                            <a href="javascript:void();" class="badge badge-dark badge-pill">jquery</a>
                                            <a href="javascript:void();" class="badge badge-dark badge-pill">bootstrap</a>
                                            <a href="javascript:void();"
                                                class="badge badge-dark badge-pill">responsive-design</a>
                                            <hr>
                                            <span class="badge badge-primary"><i class="fa fa-user"></i> 900
                                                Followers</span>
                                            <span class="badge badge-success"><i class="fa fa-cog"></i> 43 Forks</span>
                                            <span class="badge badge-danger"><i class="fa fa-eye"></i> 245 Views</span>
                                        </div>
                                    </div>
                                    <!--/row-->
                                </div>
                                <div class="tab-pane" id="edit">
                                    <form method="POST" action="{{ route('backend.product.update', $product->id) }}">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label">Tên sản phẩm</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" type="text" name="name"
                                                    value="{{ $product->name }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="basic-select" class="col-sm-3 col-form-label">Danh mục</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" id="basic-select" name="category_id">
                                                    @foreach ($allCategories as $category)
                                                        <option value="{{ $category->id }}"
                                                            {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                                            {{ $category->name }}</option>
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
                                                    value="{{ $product->sale->origin_price }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label">Giá bán</label>
                                            <div class="col-lg-3">
                                                <input class="form-control" type="text" name="sale_price"
                                                    value="{{ $product->sale->sale_price }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label">Ảnh hiển thị</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" type="file" name="thumbnail">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label">Ảnh sản phẩm</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" type="file" name="images">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label"></label>
                                            <div class="col-lg-9">
                                                <input type="submit" class="btn btn-primary" value="Lưu">
                                            </div>
                                        </div>
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
@endsection
