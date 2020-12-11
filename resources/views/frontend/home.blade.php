@extends('frontend.layouts.master')

@section('slider')
    <!--slider area start-->
    <section class="slider_section slider_section_three mb-70">
        <div class="slider_area owl-carousel">
            <div class="single_slider d-flex align-items-center" data-bgimg="http://laz-img-cdn.alicdn.com/images/ims-web/TB1ha.wrggP7K4jSZFqXXamhVXa.jpg_2200x2200Q100.jpg_.webp">
            </div>
            <div class="single_slider d-flex align-items-center" data-bgimg="https://cf.shopee.vn/file/157c0b91937fa7af38d42cdea3fe3765_xxhdpi">
            </div><div class="single_slider d-flex align-items-center" data-bgimg="/frontend/assets/img/slider/slider3.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="slider_content">
                                <h1>Hurry Up!</h1>
                                <h2>IN THE WORD 2019</h2>
                                <p>exclusive offer <span> 20% off </span> this week</p>
                                <a class="button" href="shop.html">shopping now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--slider area end-->
@endsection

@section('content')
    <!--new product area start-->
    <div class="product_area mb-46">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_tab_btn3">
                        <ul class="nav" role="tablist">
                            <li>
                                <a data-toggle="tab" href="#Products3" role="tab" aria-controls="Products3"
                                    aria-selected="false">
                                    Sản Phẩm Mới
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="Products3" role="tabpanel">
                    <div class="product_carousel product_column5 owl-carousel">
                        @foreach ($newProducts as $product)
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="{{ asset($product->thumbnail) }}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                            class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="quick_button"><a href="#" data-toggle="modal"
                                                        data-target="#new_{{ $product->id }}" title="quick view"> <span
                                                            class="ion-ios-search-strong"></span></a></li>
                                            </ul>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{ route('frontend.cart.add', $product->id) }}" title="add to cart">Thêm vào giỏ hàng</a>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="price_box">
                                            <span class="old_price">{{ number_format($product->origin_price) }} đ</span>
                                            <span class="current_price">{{ number_format($product->sale_price) }} đ</span>
                                        </div>
                                        <h3 class="product_name"><a href="{{ route('frontend.product.detail', $product->slug) }}">{{ $product->name }}</a></h3>
                                    </figcaption>
                                </figure>
                            </article>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product area end-->

    <!-- sale product area start-->
    <div class="product_area mb-46">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_tab_btn3">
                        <ul class="nav" role="tablist">
                            <li>
                                <a data-toggle="tab" href="#Sale" role="tab" aria-controls="Sale"
                                    aria-selected="false">
                                    Giảm giá sâu
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="Sale" role="tabpanel">
                    <div class="product_carousel product_column5 owl-carousel">
                        @foreach ($saleProducts as $product)
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="{{ asset($product->thumbnail) }}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">{{ $product->discount_percent }}%</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                            class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="quick_button"><a href="#" data-toggle="modal"
                                                        data-target="#sale_{{ $product->id }}" title="quick view"> <span
                                                            class="ion-ios-search-strong"></span></a></li>
                                            </ul>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{ route('frontend.cart.add', $product->id) }}" title="add to cart">Thêm vào giỏ hàng</a>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="price_box">
                                            <span class="old_price">{{ number_format($product->origin_price) }} đ</span>
                                            <span class="current_price">{{ number_format($product->sale_price) }} đ</span>
                                        </div>
                                        <h3 class="product_name"><a href="{{ route('frontend.product.detail', $product->slug) }}">{{ $product->name }}</a></h3>
                                    </figcaption>
                                </figure>
                            </article>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product area end-->

    <!--brand area start-->
    <div class="brand_area brand_two mb-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="brand_container owl-carousel">
                        @foreach ($brands as $brand)
                        <div class="brand_items">
                            <div class="single_brand">
                                <a href="#"><img src="{{ asset($brand->thumbnail) }}" alt=""></a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--brand area end-->

    <!-- modal area start-->
    @foreach ($newProducts as $item)
    <div class="modal fade" id="new_{{ $item->id }}" tabindex="-1" role="dialog" aria-hidden="true">
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
                                        <div class="tab-pane fade show active" id="new{{ $item->id }}tab" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="{{ asset($item->thumbnail) }}" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <div class="modal_right">
                                    <div class="modal_title mb-10">
                                        <h2>{{ $item->name }}</h2>
                                    </div>
                                    <div class="modal_price mb-10">
                                        <span class="new_price">{{ number_format($item->sale_price) }} đ</span>
                                        @if ($item->sale_price!=$item->origin_price)
                                        <span class="old_price">{{ number_format($item->origin_price) }} đ</span>
                                        @endif
                                    </div>
                                    <div class="modal_description mb-15">
                                        <p>{{ ($item->description!=null)? $item->description : 'Không có mô tả' }}</p>
                                    </div>
                                    <div class="variants_selects">
                                        <div class="modal_add_to_cart">
                                            <form action="{{ route('frontend.cart.add', $item->id) }}">
                                                <input min="0" max="100" step="1" value="1" type="number" name="quantity">
                                                <button type="submit">thêm vào giỏ hàng</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    @foreach ($saleProducts as $item)
    <div class="modal fade" id="sale_{{ $item->id }}" tabindex="-1" role="dialog" aria-hidden="true">
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
                                        <div class="tab-pane fade show active" id="sale{{ $item->id }}tab" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="{{ asset($item->thumbnail) }}" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <div class="modal_right">
                                    <div class="modal_title mb-10">
                                        <h2>{{ $item->name }}</h2>
                                    </div>
                                    <div class="modal_price mb-10">
                                        <span class="new_price">{{ number_format($item->sale_price) }} đ</span>
                                        @if ($item->sale_price!=$item->origin_price)
                                        <span class="old_price">{{ number_format($item->origin_price) }} đ</span>
                                        @endif
                                    </div>
                                    <div class="modal_description mb-15">
                                        <p>{{ ($item->description!=null)? $item->description : 'Không có mô tả' }}</p>
                                    </div>
                                    <div class="variants_selects">
                                        <div class="modal_add_to_cart">
                                            <form action="{{ route('frontend.cart.add', $item->id) }}">
                                                <input min="0" max="100" step="1" value="1" type="number" name="quantity">
                                                <button type="submit">thêm vào giỏ hàng</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <!-- modal area end-->
@endsection
