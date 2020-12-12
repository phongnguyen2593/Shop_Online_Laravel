@extends('frontend.layouts.master')

@section('content')
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{ route('frontend.index') }}">Trang chủ</a></li>
                            <li>Thương hiệu</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--shop  area start-->
    <div class="shop_area shop_fullwidth mt-60 mb-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!--shop wrapper start-->
                    <!--shop toolbar start-->
                    <div class="shop_toolbar_wrapper">
                        <div class=" niceselect_option">
                            <form class="select_option" action="#">
                                <select name="orderby" id="short">
                                    <option selected="" value="1">Sort by average rating</option>
                                    <option value="2">Sort by popularity</option>
                                    <option value="3">Sort by newness</option>
                                    <option value="4">Sort by price: low to high</option>
                                    <option value="5">Sort by price: high to low</option>
                                    <option value="6">Product Name: Z</option>
                                </select>
                            </form>
                        </div>
                    </div>
                    <!--shop toolbar end-->

                    <div class="row shop_wrapper">
                        @foreach ($brands as $brand)
                            <div class="col-lg-3 col-md-4 col-12 ">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{ route('frontend.brand.product', $brand->id) }}"><img
                                                    src="{{ asset($brand->thumbnail) }}" alt=""></a>
                                        </div>
                                        <div class="product_content grid_content">
                                            <h3 class="product_name grid_name"><a
                                                    href="{{ route('frontend.brand.product', $brand->id) }}">{{ $brand->name }}</a></h3>
                                        </div>
                                    </figure>
                                </article>
                            </div>
                        @endforeach
                    </div>
                    <div class="shop_toolbar t_bottom">
                        {{ $brands->links() }}
                    </div>
                    <!--shop toolbar end-->
                    <!--shop wrapper end-->
                </div>
            </div>
        </div>
    </div>
    <!--shop  area end-->
@endsection
