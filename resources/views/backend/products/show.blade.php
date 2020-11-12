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
                                        <h2 style="margin-top: 16px">Chi tiết Sản Phẩm</h2>
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
<div class="single-product-tab-area mg-t-0 mg-b-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="single-product-pr">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                            <div id="myTabContent1" class="tab-content">
                                <div class="product-tab-list tab-pane fade active in" id="single-tab1">
                                    <img src="{{ asset('storage/' . $product->thumbnail) }}" alt="" />
                                </div>
                            </div>
                            <ul id="single-product-tab">
                                @foreach ($images as $image)
                                    <li>
                                        <a href="#single-tab1"><img src="{{ asset('storage/' . $image->path) }}" alt="" /></a>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                            <div class="single-product-details res-pro-tb">
                                <h1>{{ $product->name }}</h1>
                                
                                <div class="single-pro-price">
                                    <span class="single-regular">$150.00</span><span class="single-old"><del>$20.00</del></span>
                                </div>
                                <div class="single-pro-cn">
                                    <h3 style="font-weight: bold">Số lượng tồn</h3>
                                    <p>{{ $product->quantity }}</p>
                                </div>
                                <div class="color-quality-pro">
                                    <div class="color-quality-details">
                                        <h5>Danh mục</h5>
                                        <p style="color: #fff">{{ $product->category_id }}</p>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="single-pro-cn">
                                    <h3>Mô tả sản phẩm</h3>
                                    @if ($product->description == null)
                                        <p>Không có mô tả</p>
                                    @else
                                        <p>{{ $product->description }}</p>
                                    @endif
                                    
                                </div>
                            </div>

                            <br>
                            <div class="single-pro-cn">
                                <h3 style="font-weight: bold">Hành động</h3>
                                <a href="{{ route('backend.product.edit', $product->id) }}" style="color: #fff"><button title="Chỉnh sửa" class="pd-setting-ed"><i class="fa fa-pencil-square-o"></i></button></a>
                                <a href="" style="color: white"><button title="Xóa" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection