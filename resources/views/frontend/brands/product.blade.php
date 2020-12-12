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
                            <li ><a href="{{ route('frontend.brand') }}">Thương hiệu</a></li>
                            <li>{{ $brand->name }}</li>
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
                        @foreach ($products as $product)
                            <div class="col-lg-3 col-md-4 col-12 ">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset($product->thumbnail) }}" alt=""></a>
                                            <div class="label_product">
                                                @if ($product->discount_percent != 0)
                                                    <span class="label_sale">{{ $product->discount_percent }}%</span>
                                                @endif
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.html" title="Yêu thích"><i
                                                                class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal"
                                                            data-target="#modal_box_{{ $product->id }}" title="Xem nhanh">
                                                            <span class="ion-ios-search-strong"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="add_to_cart">
                                                <a href="{{ route('frontend.cart.add', $product->id) }}">Thêm vào giỏ
                                                    hàng</a>
                                            </div>
                                        </div>
                                        <div class="product_content grid_content">
                                            <div class="price_box">
                                                @if ($product->sale_price == $product->origin_price)
                                                    <span
                                                        class="current_price">{{ number_format($product->sale_price) }}
                                                        VND</span>
                                                @else
                                                    <span
                                                        class="old_price">{{ number_format($product->origin_price) }}
                                                        VND</span>
                                                    <span
                                                        class="current_price">{{ number_format($product->sale_price) }}
                                                        VND</span>
                                                @endif
                                            </div>
                                            <div class="product_ratings">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <h3 class="product_name grid_name"><a
                                                    href="product-details.html">{{ $product->name }}</a></h3>
                                        </div>
                                    </figure>
                                </article>
                            </div>
                        @endforeach
                    </div>
                    <div class="shop_toolbar t_bottom">
                        {{ $products->links() }}
                    </div>
                    <!--shop toolbar end-->
                    <!--shop wrapper end-->
                </div>
            </div>
        </div>
    </div>
    <!--shop  area end-->
    <!-- modal area start-->
    @foreach ($products as $product)
        <div class="modal fade" id="modal_box_{{ $product->id }}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal_body">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-5 col-md-5 col-sm-12">
                                    <div class="modal_tab">
                                        <div class="tab-content product-details-large">
                                            <div class="tab-pane fade show active" id="tab1-{{ $product->id }}"
                                                role="tabpanel">
                                                <div class="modal_tab_img">
                                                    <a href="#"><img src="{{ asset($product->thumbnail) }}" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-7 col-sm-12">
                                    <div class="modal_right">
                                        <div class="modal_title mb-10">
                                            <h2>{{ $product->name }}</h2>
                                        </div>
                                        <div class="modal_price mb-10">
                                            @if ($product->sale_price == $product->origin_price)
                                                <span class="new_price">{{ number_format($product->sale_price) }}
                                                    VND</span>
                                            @else
                                                <span class="new_price">{{ number_format($product->sale_price) }}
                                                    VND</span>
                                                <span class="old_price">{{ number_format($product->origin_price) }}
                                                    VND</span>
                                            @endif
                                        </div>
                                        <div class="modal_description mb-15">
                                            @if ($product->description != null)
                                                <p>{{ $product->description }}</p>
                                            @else
                                                <p>Không có mô tả</p>
                                            @endif
                                        </div>
                                        <div class="variants_selects">
                                            <div class="modal_add_to_cart">
                                                <form action="{{ route('frontend.cart.add', $product->id) }}" method="GET">
                                                    <input min="1" max="100" step="1" value="1" type="number">
                                                    <button type="submit">Thêm vào giỏ hàng</button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="modal_social">
                                            <h2>Share this product</h2>
                                            <ul>
                                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a>
                                                </li>
                                                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal area end-->
    @endforeach
@endsection
