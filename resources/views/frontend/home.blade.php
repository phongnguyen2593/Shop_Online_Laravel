@extends('frontend.layouts.master')

@section('slider')
    <!--slider area start-->
    <section class="slider_section slider_section_three mb-70">
        <div class="slider_area owl-carousel">
            <div class="single_slider d-flex align-items-center" data-bgimg="/frontend/assets/img/slider/slider4.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="slider_content">
                                <h1>best skin</h1>
                                <h2>qled 75 inch q7f</h2>
                                <p>exclusive offer <span> 20% off </span> this week</p>
                                <a class="button" href="shop.html">shopping now</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="single_slider d-flex align-items-center" data-bgimg="/frontend/assets/img/slider/slider3.jpg">
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
    <!--banner area start-->
    <div class="banner_area mb-36">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="single_banner mb-30">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="/frontend/assets/img/bg/banner1.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single_banner mb-30">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="/frontend/assets/img/bg/banner2.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="single_banner mb-30">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="/frontend/assets/img/bg/banner3.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner area end-->

    <!--product area start-->
    <div class="product_area mb-46">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_tab_btn3">
                        <ul class="nav" role="tablist">
                            <li>
                                <a class="active" data-toggle="tab" href="#Bestseller" role="tab" aria-controls="Bestseller"
                                    aria-selected="true">
                                    Sản Phẩm Bán Chạy
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#Products3" role="tab" aria-controls="Products3"
                                    aria-selected="false">
                                    Sản Phẩm Mới
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#Sale3" role="tab" aria-controls="Sale3" aria-selected="false">
                                    Sản Phẩm Giảm Giá
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="Bestseller" role="tabpanel">
                    <div class="product_carousel product_column5 owl-carousel">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img
                                            src="/frontend/assets/img/product/product1.jpg" alt=""></a>
                                    <a class="secondary_img" href="product-details.html"><img
                                            src="/frontend/assets/img/product/product2.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">sale</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                        class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal"
                                                    data-target="#modal_box" title="quick view"> <span
                                                        class="ion-ios-search-strong"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="" title="add to cart">Add to cart</a>
                                    </div>
                                </div>
                                <figcaption class="product_content">
                                    <div class="price_box">
                                        <span class="old_price">$86.00</span>
                                        <span class="current_price">$79.00</span>
                                    </div>
                                    <h3 class="product_name"><a href="product-details.html">Natus erro at congue massa
                                            commodo sit</a></h3>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                </div>
                <div class="tab-pane fade" id="Products3" role="tabpanel">
                    <div class="product_carousel product_column5 owl-carousel">
                        @foreach ($newProducts as $product)
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product23.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product24.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                            class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="quick_button"><a href="#" data-toggle="modal"
                                                        data-target="#modal_box" title="quick view"> <span
                                                            class="ion-ios-search-strong"></span></a></li>
                                            </ul>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{ route('frontend.cart.add', $product->id) }}" title="add to cart">Thêm vào giỏ hàng</a>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="price_box">
                                            <span class="old_price">{{ number_format($product->sale->origin_price) }} đ</span>
                                            <span class="current_price">{{ number_format($product->sale->sale_price) }} đ</span>
                                        </div>
                                        <h3 class="product_name"><a href="{{ route('frontend.detail', $product->slug) }}">{{ $product->name }}</a></h3>
                                    </figcaption>
                                </figure>
                            </article>
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" id="Sale3" role="tabpanel">
                    <div class="product_carousel product_column5 owl-carousel">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img
                                            src="/frontend/assets/img/product/product9.jpg" alt=""></a>
                                    <a class="secondary_img" href="product-details.html"><img
                                            src="/frontend/assets/img/product/product10.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">sale</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                        class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal"
                                                    data-target="#modal_box" title="quick view"> <span
                                                        class="ion-ios-search-strong"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="cart.html" title="add to cart">Add to cart</a>
                                    </div>
                                </div>
                                <figcaption class="product_content">
                                    <div class="price_box">
                                        <span class="old_price">$86.00</span>
                                        <span class="current_price">$79.00</span>
                                    </div>
                                    <h3 class="product_name"><a href="product-details.html">Natus erro at congue massa
                                            commodo sit</a></h3>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img
                                            src="/frontend/assets/img/product/product7.jpg" alt=""></a>
                                    <a class="secondary_img" href="product-details.html"><img
                                            src="/frontend/assets/img/product/product8.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">sale</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                        class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal"
                                                    data-target="#modal_box" title="quick view"> <span
                                                        class="ion-ios-search-strong"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="cart.html" title="add to cart">Add to cart</a>
                                    </div>
                                </div>
                                <figcaption class="product_content">
                                    <div class="price_box">
                                        <span class="old_price">$86.00</span>
                                        <span class="current_price">$79.00</span>
                                    </div>
                                    <h3 class="product_name"><a href="product-details.html">Itaque earum velit elementum</a>
                                    </h3>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img
                                            src="/frontend/assets/img/product/product5.jpg" alt=""></a>
                                    <a class="secondary_img" href="product-details.html"><img
                                            src="/frontend/assets/img/product/product6.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">sale</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                        class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal"
                                                    data-target="#modal_box" title="quick view"> <span
                                                        class="ion-ios-search-strong"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="cart.html" title="add to cart">Add to cart</a>
                                    </div>
                                </div>
                                <figcaption class="product_content">
                                    <div class="price_box">
                                        <span class="old_price">$86.00</span>
                                        <span class="current_price">$79.00</span>
                                    </div>
                                    <h3 class="product_name"><a href="product-details.html">Mauris tincidunt eros posuere
                                            placerat</a></h3>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img
                                            src="/frontend/assets/img/product/product3.jpg" alt=""></a>
                                    <a class="secondary_img" href="product-details.html"><img
                                            src="/frontend/assets/img/product/product4.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">sale</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                        class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal"
                                                    data-target="#modal_box" title="quick view"> <span
                                                        class="ion-ios-search-strong"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="cart.html" title="add to cart">Add to cart</a>
                                    </div>
                                </div>
                                <figcaption class="product_content">
                                    <div class="price_box">
                                        <span class="old_price">$86.00</span>
                                        <span class="current_price">$79.00</span>
                                    </div>
                                    <h3 class="product_name"><a href="product-details.html">Morbi ornare vestibulum
                                            massa</a></h3>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img
                                            src="/frontend/assets/img/product/product1.jpg" alt=""></a>
                                    <a class="secondary_img" href="product-details.html"><img
                                            src="/frontend/assets/img/product/product2.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">sale</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                        class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal"
                                                    data-target="#modal_box" title="quick view"> <span
                                                        class="ion-ios-search-strong"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="cart.html" title="add to cart">Add to cart</a>
                                    </div>
                                </div>
                                <figcaption class="product_content">
                                    <div class="price_box">
                                        <span class="old_price">$86.00</span>
                                        <span class="current_price">$79.00</span>
                                    </div>
                                    <h3 class="product_name"><a href="product-details.html">Porro quisquam eget feugiat
                                            pretium</a></h3>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img
                                            src="/frontend/assets/img/product/product15.jpg" alt=""></a>
                                    <a class="secondary_img" href="product-details.html"><img
                                            src="/frontend/assets/img/product/product16.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">sale</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                        class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal"
                                                    data-target="#modal_box" title="quick view"> <span
                                                        class="ion-ios-search-strong"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="cart.html" title="add to cart">Add to cart</a>
                                    </div>
                                </div>
                                <figcaption class="product_content">
                                    <div class="price_box">
                                        <span class="old_price">$86.00</span>
                                        <span class="current_price">$79.00</span>
                                    </div>
                                    <h3 class="product_name"><a href="product-details.html">Laudantium enim fringilla
                                            dignissim ipsum primis</a></h3>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img
                                            src="/frontend/assets/img/product/product17.jpg" alt=""></a>
                                    <a class="secondary_img" href="product-details.html"><img
                                            src="/frontend/assets/img/product/product18.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">sale</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                        class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal"
                                                    data-target="#modal_box" title="quick view"> <span
                                                        class="ion-ios-search-strong"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="cart.html" title="add to cart">Add to cart</a>
                                    </div>
                                </div>
                                <figcaption class="product_content">
                                    <div class="price_box">
                                        <span class="old_price">$86.00</span>
                                        <span class="current_price">$79.00</span>
                                    </div>
                                    <h3 class="product_name"><a href="product-details.html">Natus erro at congue massa
                                            commodo sit</a></h3>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product area end-->

    <!--banner area start-->
    <div class="banner_area banner_two mb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="single_banner mb-30">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="/frontend/assets/img/bg/banner4.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single_banner mb-30">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="/frontend/assets/img/bg/banner5.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner area end-->

    <!--product area start-->
    <section class="product_area product_deals_three mb-68">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-12">
                    <div class="deals_title_three">
                        <h2>Hot Deals Products Off The Days</h2>
                        <p>Aliquam eget consectetuer habitasse interdum.</p>
                    </div>
                </div>
                <div class="col-lg-10 col-md-12">
                    <div class="row">
                        <div class="product_carousel product_deals_column4 owl-carousel">
                            <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-countdown.html"><img
                                                    src="/frontend/assets/img/product/product1.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-countdown.html"><img
                                                    src="/frontend/assets/img/product/product2.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">sale</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                                class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal"
                                                            data-target="#modal_box" title="quick view"> <span
                                                                class="ion-ios-search-strong"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="add_to_cart">
                                                <a href="cart.html" title="add to cart">Add to cart</a>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <div class="price_box">
                                                <span class="old_price">$86.00</span>
                                                <span class="current_price">$79.00</span>
                                            </div>
                                            <h3 class="product_name"><a href="product-countdown.html">Natus erro at congue
                                                    massa commodo sit</a></h3>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-countdown.html"><img
                                                    src="/frontend/assets/img/product/product3.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-countdown.html"><img
                                                    src="/frontend/assets/img/product/product4.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">sale</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                                class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal"
                                                            data-target="#modal_box" title="quick view"> <span
                                                                class="ion-ios-search-strong"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="add_to_cart">
                                                <a href="cart.html" title="add to cart">Add to cart</a>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <div class="price_box">
                                                <span class="old_price">$86.00</span>
                                                <span class="current_price">$79.00</span>
                                            </div>
                                            <h3 class="product_name"><a href="product-countdown.html">Itaque earum velit
                                                    elementum</a></h3>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-countdown.html"><img
                                                    src="/frontend/assets/img/product/product5.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-countdown.html"><img
                                                    src="/frontend/assets/img/product/product6.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">sale</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                                class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal"
                                                            data-target="#modal_box" title="quick view"> <span
                                                                class="ion-ios-search-strong"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="add_to_cart">
                                                <a href="cart.html" title="add to cart">Add to cart</a>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <div class="price_box">
                                                <span class="old_price">$86.00</span>
                                                <span class="current_price">$79.00</span>
                                            </div>
                                            <h3 class="product_name"><a href="product-countdown.html">Mauris tincidunt eros
                                                    posuere placerat</a></h3>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-countdown.html"><img
                                                    src="/frontend/assets/img/product/product7.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-countdown.html"><img
                                                    src="/frontend/assets/img/product/product8.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">sale</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                                class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal"
                                                            data-target="#modal_box" title="quick view"> <span
                                                                class="ion-ios-search-strong"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="add_to_cart">
                                                <a href="cart.html" title="add to cart">Add to cart</a>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <div class="price_box">
                                                <span class="old_price">$86.00</span>
                                                <span class="current_price">$79.00</span>
                                            </div>
                                            <h3 class="product_name"><a href="product-countdown.html">Morbi ornare
                                                    vestibulum massa</a></h3>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-countdown.html"><img
                                                    src="/frontend/assets/img/product/product9.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-countdown.html"><img
                                                    src="/frontend/assets/img/product/product10.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">sale</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                                class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal"
                                                            data-target="#modal_box" title="quick view"> <span
                                                                class="ion-ios-search-strong"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="add_to_cart">
                                                <a href="cart.html" title="add to cart">Add to cart</a>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <div class="price_box">
                                                <span class="old_price">$86.00</span>
                                                <span class="current_price">$79.00</span>
                                            </div>
                                            <h3 class="product_name"><a href="product-countdown.html">Porro quisquam eget
                                                    feugiat pretium</a></h3>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-countdown.html"><img
                                                    src="/frontend/assets/img/product/product11.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-countdown.html"><img
                                                    src="/frontend/assets/img/product/product12.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">sale</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                                class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal"
                                                            data-target="#modal_box" title="quick view"> <span
                                                                class="ion-ios-search-strong"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="add_to_cart">
                                                <a href="cart.html" title="add to cart">Add to cart</a>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <div class="price_box">
                                                <span class="old_price">$86.00</span>
                                                <span class="current_price">$79.00</span>
                                            </div>
                                            <h3 class="product_name"><a href="product-countdown.html">Laudantium enim
                                                    fringilla dignissim ipsum primis</a></h3>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-countdown.html"><img
                                                    src="/frontend/assets/img/product/product4.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-countdown.html"><img
                                                    src="/frontend/assets/img/product/product5.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">sale</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                                class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal"
                                                            data-target="#modal_box" title="quick view"> <span
                                                                class="ion-ios-search-strong"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="add_to_cart">
                                                <a href="cart.html" title="add to cart">Add to cart</a>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <div class="price_box">
                                                <span class="old_price">$86.00</span>
                                                <span class="current_price">$79.00</span>
                                            </div>
                                            <h3 class="product_name"><a href="product-countdown.html">Natus erro at congue
                                                    massa commodo sit</a></h3>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--product area end-->

    <!--product area start-->
    <section class="product_area mb-46">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <a href=""><h2>Computer & Laptop</h2></a>
                    </div>
                </div>
            </div>
            <div class="product_slick product_slick_column5">
                <article class="single_product">
                    <figure>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img
                                    src="/frontend/assets/img/product/product1.jpg" alt=""></a>
                            <a class="secondary_img" href="product-details.html"><img
                                    src="/frontend/assets/img/product/product2.jpg" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">sale</span>
                            </div>
                            <div class="action_links">
                                <ul>
                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"
                                            title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
                                </ul>
                            </div>
                            <div class="add_to_cart">
                                <a href="cart.html" title="add to cart">Add to cart</a>
                            </div>
                        </div>
                        <figcaption class="product_content">
                            <div class="price_box">
                                <span class="old_price">$86.00</span>
                                <span class="current_price">$79.00</span>
                            </div>
                            <h3 class="product_name"><a href="product-details.html">Natus erro at congue massa commodo
                                    sit</a></h3>
                        </figcaption>
                    </figure>
                </article>
                <article class="single_product">
                    <figure>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img
                                    src="/frontend/assets/img/product/product3.jpg" alt=""></a>
                            <a class="secondary_img" href="product-details.html"><img
                                    src="/frontend/assets/img/product/product4.jpg" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">sale</span>
                            </div>
                            <div class="action_links">
                                <ul>
                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"
                                            title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
                                </ul>
                            </div>
                            <div class="add_to_cart">
                                <a href="cart.html" title="add to cart">Add to cart</a>
                            </div>
                        </div>
                        <figcaption class="product_content">
                            <div class="price_box">
                                <span class="old_price">$86.00</span>
                                <span class="current_price">$79.00</span>
                            </div>
                            <h3 class="product_name"><a href="product-details.html">Itaque earum velit elementum</a></h3>
                        </figcaption>
                    </figure>
                </article>
                <article class="single_product">
                    <figure>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img
                                    src="/frontend/assets/img/product/product5.jpg" alt=""></a>
                            <a class="secondary_img" href="product-details.html"><img
                                    src="/frontend/assets/img/product/product6.jpg" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">sale</span>
                            </div>
                            <div class="action_links">
                                <ul>
                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"
                                            title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
                                </ul>
                            </div>
                            <div class="add_to_cart">
                                <a href="cart.html" title="add to cart">Add to cart</a>
                            </div>
                        </div>
                        <figcaption class="product_content">
                            <div class="price_box">
                                <span class="old_price">$86.00</span>
                                <span class="current_price">$79.00</span>
                            </div>
                            <h3 class="product_name"><a href="product-details.html">Mauris tincidunt eros posuere
                                    placerat</a></h3>
                        </figcaption>
                    </figure>
                </article>
                <article class="single_product">
                    <figure>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img
                                    src="/frontend/assets/img/product/product7.jpg" alt=""></a>
                            <a class="secondary_img" href="product-details.html"><img
                                    src="/frontend/assets/img/product/product8.jpg" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">sale</span>
                            </div>
                            <div class="action_links">
                                <ul>
                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"
                                            title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
                                </ul>
                            </div>
                            <div class="add_to_cart">
                                <a href="cart.html" title="add to cart">Add to cart</a>
                            </div>
                        </div>
                        <figcaption class="product_content">
                            <div class="price_box">
                                <span class="old_price">$86.00</span>
                                <span class="current_price">$79.00</span>
                            </div>
                            <h3 class="product_name"><a href="product-details.html">Morbi ornare vestibulum massa</a></h3>
                        </figcaption>
                    </figure>
                </article>
                <article class="single_product">
                    <figure>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img
                                    src="/frontend/assets/img/product/product9.jpg" alt=""></a>
                            <a class="secondary_img" href="product-details.html"><img
                                    src="/frontend/assets/img/product/product10.jpg" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">sale</span>
                            </div>
                            <div class="action_links">
                                <ul>
                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"
                                            title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
                                </ul>
                            </div>
                            <div class="add_to_cart">
                                <a href="cart.html" title="add to cart">Add to cart</a>
                            </div>
                        </div>
                        <figcaption class="product_content">
                            <div class="price_box">
                                <span class="old_price">$86.00</span>
                                <span class="current_price">$79.00</span>
                            </div>
                            <h3 class="product_name"><a href="product-details.html">Porro quisquam eget feugiat pretium</a>
                            </h3>
                        </figcaption>
                    </figure>
                </article>
                <article class="single_product">
                    <figure>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img
                                    src="/frontend/assets/img/product/product11.jpg" alt=""></a>
                            <a class="secondary_img" href="product-details.html"><img
                                    src="/frontend/assets/img/product/product12.jpg" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">sale</span>
                            </div>
                            <div class="action_links">
                                <ul>
                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"
                                            title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
                                </ul>
                            </div>
                            <div class="add_to_cart">
                                <a href="cart.html" title="add to cart">Add to cart</a>
                            </div>
                        </div>
                        <figcaption class="product_content">
                            <div class="price_box">
                                <span class="old_price">$86.00</span>
                                <span class="current_price">$79.00</span>
                            </div>
                            <h3 class="product_name"><a href="product-details.html">Laudantium enim fringilla dignissim
                                    ipsum primis</a></h3>
                        </figcaption>
                    </figure>
                </article>
                <article class="single_product">
                    <figure>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img
                                    src="/frontend/assets/img/product/product4.jpg" alt=""></a>
                            <a class="secondary_img" href="product-details.html"><img
                                    src="/frontend/assets/img/product/product5.jpg" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">sale</span>
                            </div>
                            <div class="action_links">
                                <ul>
                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"
                                            title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
                                </ul>
                            </div>
                            <div class="add_to_cart">
                                <a href="cart.html" title="add to cart">Add to cart</a>
                            </div>
                        </div>
                        <figcaption class="product_content">
                            <div class="price_box">
                                <span class="old_price">$86.00</span>
                                <span class="current_price">$79.00</span>
                            </div>
                            <h3 class="product_name"><a href="product-details.html">Natus erro at congue massa commodo
                                    sit</a></h3>
                        </figcaption>
                    </figure>
                </article>
                <article class="single_product">
                    <figure>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img
                                    src="/frontend/assets/img/product/product5.jpg" alt=""></a>
                            <a class="secondary_img" href="product-details.html"><img
                                    src="/frontend/assets/img/product/product6.jpg" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">sale</span>
                            </div>
                            <div class="action_links">
                                <ul>
                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"
                                            title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
                                </ul>
                            </div>
                            <div class="add_to_cart">
                                <a href="cart.html" title="add to cart">Add to cart</a>
                            </div>
                        </div>
                        <figcaption class="product_content">
                            <div class="price_box">
                                <span class="old_price">$86.00</span>
                                <span class="current_price">$79.00</span>
                            </div>
                            <h3 class="product_name"><a href="product-details.html">Mauris tincidunt eros posuere
                                    placerat</a></h3>
                        </figcaption>
                    </figure>
                </article>
                <article class="single_product">
                    <figure>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img
                                    src="/frontend/assets/img/product/product7.jpg" alt=""></a>
                            <a class="secondary_img" href="product-details.html"><img
                                    src="/frontend/assets/img/product/product8.jpg" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">sale</span>
                            </div>
                            <div class="action_links">
                                <ul>
                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"
                                            title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
                                </ul>
                            </div>
                            <div class="add_to_cart">
                                <a href="cart.html" title="add to cart">Add to cart</a>
                            </div>
                        </div>
                        <figcaption class="product_content">
                            <div class="price_box">
                                <span class="old_price">$86.00</span>
                                <span class="current_price">$79.00</span>
                            </div>
                            <h3 class="product_name"><a href="product-details.html">Morbi ornare vestibulum massa</a></h3>
                        </figcaption>
                    </figure>
                </article>
                <article class="single_product">
                    <figure>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img
                                    src="/frontend/assets/img/product/product9.jpg" alt=""></a>
                            <a class="secondary_img" href="product-details.html"><img
                                    src="/frontend/assets/img/product/product10.jpg" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">sale</span>
                            </div>
                            <div class="action_links">
                                <ul>
                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"
                                            title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
                                </ul>
                            </div>
                            <div class="add_to_cart">
                                <a href="cart.html" title="add to cart">Add to cart</a>
                            </div>
                        </div>
                        <figcaption class="product_content">
                            <div class="price_box">
                                <span class="old_price">$86.00</span>
                                <span class="current_price">$79.00</span>
                            </div>
                            <h3 class="product_name"><a href="product-details.html">Porro quisquam eget feugiat pretium</a>
                            </h3>
                        </figcaption>
                    </figure>
                </article>
                <article class="single_product">
                    <figure>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img
                                    src="/frontend/assets/img/product/product11.jpg" alt=""></a>
                            <a class="secondary_img" href="product-details.html"><img
                                    src="/frontend/assets/img/product/product12.jpg" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">sale</span>
                            </div>
                            <div class="action_links">
                                <ul>
                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"
                                            title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
                                </ul>
                            </div>
                            <div class="add_to_cart">
                                <a href="cart.html" title="add to cart">Add to cart</a>
                            </div>
                        </div>
                        <figcaption class="product_content">
                            <div class="price_box">
                                <span class="old_price">$86.00</span>
                                <span class="current_price">$79.00</span>
                            </div>
                            <h3 class="product_name"><a href="product-details.html">Laudantium enim fringilla dignissim
                                    ipsum primis</a></h3>
                        </figcaption>
                    </figure>
                </article>
                <article class="single_product">
                    <figure>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img
                                    src="/frontend/assets/img/product/product4.jpg" alt=""></a>
                            <a class="secondary_img" href="product-details.html"><img
                                    src="/frontend/assets/img/product/product5.jpg" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">sale</span>
                            </div>
                            <div class="action_links">
                                <ul>
                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"
                                            title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
                                </ul>
                            </div>
                            <div class="add_to_cart">
                                <a href="cart.html" title="add to cart">Add to cart</a>
                            </div>
                        </div>
                        <figcaption class="product_content">
                            <div class="price_box">
                                <span class="old_price">$86.00</span>
                                <span class="current_price">$79.00</span>
                            </div>
                            <h3 class="product_name"><a href="product-details.html">Natus erro at congue massa commodo
                                    sit</a></h3>
                        </figcaption>
                    </figure>
                </article>
            </div>
        </div>
    </section>
    <!--product area end-->

    <!--banner area start-->
    <div class="banner_area mb-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="single_banner">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="/frontend/assets/img/bg/banner8.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner area end-->

    <!--custom product area-->
    <section class="custom_product_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <!--small product area-->
                    <div class="small_product_area">
                        <div class="section_title">
                            <h2><span> New Arrivals </span></h2>
                        </div>
                        <div class="small_product_container small_product_active">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product1.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product2.jpg" alt=""></a>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <h3 class="product_name"><a href="product-details.html">Sit voluptatem rhoncus sem
                                                lectus</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product3.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product4.jpg" alt=""></a>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <h3 class="product_name"><a href="product-details.html">Nullam maximus eget nisi
                                                dignissim</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product5.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product6.jpg" alt=""></a>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <h3 class="product_name"><a href="product-details.html">Natus erro at congue commodo
                                                sit</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product7.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product8.jpg" alt=""></a>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <h3 class="product_name"><a href="product-details.html">Convallis quam sit vitae
                                                neque ornare</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product9.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product10.jpg" alt=""></a>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <h3 class="product_name"><a href="product-details.html">Mirum est notare nibh
                                                iaculis pretium</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product11.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product12.jpg" alt=""></a>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <h3 class="product_name"><a href="product-details.html">Pellentesque ultricies
                                                suscipit est</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product1.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product2.jpg" alt=""></a>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <h3 class="product_name"><a href="product-details.html">Sit voluptatem rhoncus sem
                                                lectus</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product3.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product4.jpg" alt=""></a>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <h3 class="product_name"><a href="product-details.html">Nullam maximus eget nisi
                                                dignissim</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product5.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product6.jpg" alt=""></a>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <h3 class="product_name"><a href="product-details.html">Natus erro at congue commodo
                                                sit</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product7.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product8.jpg" alt=""></a>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <h3 class="product_name"><a href="product-details.html">Convallis quam sit vitae
                                                neque ornare</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product9.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product10.jpg" alt=""></a>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <h3 class="product_name"><a href="product-details.html">Mirum est notare nibh
                                                iaculis pretium</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product11.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product12.jpg" alt=""></a>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <h3 class="product_name"><a href="product-details.html">Pellentesque ultricies
                                                suscipit est</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                    </div>
                    <!--small product end-->
                </div>
                <div class="col-lg-4 col-md-12">
                    <!--small product area-->
                    <div class="small_product_area">
                        <div class="section_title">
                            <h2><span> On sale Products </span></h2>
                        </div>
                        <div class="small_product_container small_product_active">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product13.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product14.jpg" alt=""></a>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <h3 class="product_name"><a href="product-details.html">Eodem modo vel mattis
                                                ante</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product15.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product16.jpg" alt=""></a>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <h3 class="product_name"><a href="product-details.html">Sit voluptatem rhoncus sem
                                                lectus</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product17.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product18.jpg" alt=""></a>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <h3 class="product_name"><a href="product-details.html">Laudantium dignissim ipsum
                                                primis</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product19.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product20.jpg" alt=""></a>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <h3 class="product_name"><a href="product-details.html">Cras neque honcus
                                                consectetur</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product21.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product22.jpg" alt=""></a>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <h3 class="product_name"><a href="product-details.html">Pellentesque ultricies
                                                suscipit est</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product23.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product24.jpg" alt=""></a>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <h3 class="product_name"><a href="product-details.html">Sit voluptatem rhoncus sem
                                                lectus</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product13.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product14.jpg" alt=""></a>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <h3 class="product_name"><a href="product-details.html">Eodem modo vel mattis
                                                ante</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product15.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product16.jpg" alt=""></a>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <h3 class="product_name"><a href="product-details.html">Sit voluptatem rhoncus sem
                                                lectus</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product17.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product18.jpg" alt=""></a>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <h3 class="product_name"><a href="product-details.html">Laudantium dignissim ipsum
                                                primis</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product19.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product20.jpg" alt=""></a>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <h3 class="product_name"><a href="product-details.html">Cras neque honcus
                                                consectetur</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product21.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product22.jpg" alt=""></a>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <h3 class="product_name"><a href="product-details.html">Pellentesque ultricies
                                                suscipit est</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product23.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product24.jpg" alt=""></a>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <h3 class="product_name"><a href="product-details.html">Sit voluptatem rhoncus sem
                                                lectus</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                    </div>
                    <!--small product end-->
                </div>
                <div class="col-lg-4 col-md-12">
                    <!--small product area-->
                    <div class="small_product_area">
                        <div class="section_title">
                            <h2><span> Top rated Products </span></h2>
                        </div>
                        <div class="small_product_container small_product_active">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product10.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product11.jpg" alt=""></a>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <h3 class="product_name"><a href="product-details.html">Auctor gravida enim quam ut
                                                risus</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product12.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product13.jpg" alt=""></a>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <h3 class="product_name"><a href="product-details.html">Convallis quam sit neque
                                                ornare</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product14.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product15.jpg" alt=""></a>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <h3 class="product_name"><a href="product-details.html">Sit voluptatem rhoncus sem
                                                lectus</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product16.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product17.jpg" alt=""></a>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <h3 class="product_name"><a href="product-details.html">Cras neque metus eugiat
                                                felis sem</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product18.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product19.jpg" alt=""></a>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <h3 class="product_name"><a href="product-details.html">Duis pulvinar obortis
                                                elementum</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product20.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product21.jpg" alt=""></a>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <h3 class="product_name"><a href="product-details.html">Sit voluptatem rhoncus sem
                                                lectus</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product10.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product11.jpg" alt=""></a>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <h3 class="product_name"><a href="product-details.html">Auctor gravida enim quam ut
                                                risus</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product12.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product13.jpg" alt=""></a>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <h3 class="product_name"><a href="product-details.html">Convallis quam sit neque
                                                ornare</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product14.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product15.jpg" alt=""></a>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <h3 class="product_name"><a href="product-details.html">Sit voluptatem rhoncus sem
                                                lectus</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product16.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product17.jpg" alt=""></a>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <h3 class="product_name"><a href="product-details.html">Cras neque metus eugiat
                                                felis sem</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product18.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product19.jpg" alt=""></a>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <h3 class="product_name"><a href="product-details.html">Duis pulvinar obortis
                                                elementum</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product20.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img
                                                src="/frontend/assets/img/product/product21.jpg" alt=""></a>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <h3 class="product_name"><a href="product-details.html">Sit voluptatem rhoncus sem
                                                lectus</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                    </div>
                    <!--small product end-->
                </div>
            </div>
        </div>
    </section>
    <!--custom product end-->

    <!--brand area start-->
    <div class="brand_area brand_two mb-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="brand_container owl-carousel">
                        <div class="brand_items">
                            <div class="single_brand">
                                <a href="#"><img src="/frontend/assets/img/brand/brand1.jpg" alt=""></a>
                            </div>
                            <div class="single_brand">
                                <a href="#"><img src="/frontend/assets/img/brand/brand2.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="brand_items">
                            <div class="single_brand">
                                <a href="#"><img src="/frontend/assets/img/brand/brand3.jpg" alt=""></a>
                            </div>
                            <div class="single_brand">
                                <a href="#"><img src="/frontend/assets/img/brand/brand4.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="brand_items">
                            <div class="single_brand">
                                <a href="#"><img src="/frontend/assets/img/brand/brand5.jpg" alt=""></a>
                            </div>
                            <div class="single_brand">
                                <a href="#"><img src="/frontend/assets/img/brand/brand6.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="brand_items">
                            <div class="single_brand">
                                <a href="#"><img src="/frontend/assets/img/brand/brand7.jpg" alt=""></a>
                            </div>
                            <div class="single_brand">
                                <a href="#"><img src="/frontend/assets/img/brand/brand8.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="brand_items">
                            <div class="single_brand">
                                <a href="#"><img src="/frontend/assets/img/brand/brand9.jpg" alt=""></a>
                            </div>
                            <div class="single_brand">
                                <a href="#"><img src="{{ asset('frontend/assets/img/brand/brand10.jpg') }}" alt=""></a>
                            </div>
                        </div>
                        <div class="brand_items">
                            <div class="single_brand">
                                <a href="#"><img src="/frontend/assets/img/brand/brand2.jpg" alt=""></a>
                            </div>
                            <div class="single_brand">
                                <a href="#"><img src="/frontend/assets/img/brand/brand3.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--brand area end-->

    <!-- modal area start-->
    <div class="modal fade" id="modal_box" tabindex="-1" role="dialog" aria-hidden="true">
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
                                        <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="/frontend/assets/img/product/product1.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="/frontend/assets/img/product/product2.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="/frontend/assets/img/product/product3.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab4" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="/frontend/assets/img/product/product5.jpg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal_tab_button">
                                        <ul class="nav product_navactive owl-carousel" role="tablist">
                                            <li>
                                                <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab"
                                                    aria-controls="tab1" aria-selected="false"><img
                                                        src="/frontend/assets/img/product/product1.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="nav-link" data-toggle="tab" href="#tab2" role="tab"
                                                    aria-controls="tab2" aria-selected="false"><img
                                                        src="/frontend/assets/img/product/product2.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="nav-link button_three" data-toggle="tab" href="#tab3" role="tab"
                                                    aria-controls="tab3" aria-selected="false"><img
                                                        src="/frontend/assets/img/product/product3.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="nav-link" data-toggle="tab" href="#tab4" role="tab"
                                                    aria-controls="tab4" aria-selected="false"><img
                                                        src="/frontend/assets/img/product/product5.jpg" alt=""></a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <div class="modal_right">
                                    <div class="modal_title mb-10">
                                        <h2>Handbag feugiat</h2>
                                    </div>
                                    <div class="modal_price mb-10">
                                        <span class="new_price">$64.99</span>
                                        <span class="old_price">$78.99</span>
                                    </div>
                                    <div class="modal_description mb-15">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum
                                            ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui
                                            nemo ipsum numquam, reiciendis maiores quidem aperiam, rerum vel recusandae </p>
                                    </div>
                                    <div class="variants_selects">
                                        <div class="variants_size">
                                            <h2>size</h2>
                                            <select class="select_option">
                                                <option selected="" value="1">s</option>
                                                <option value="1">m</option>
                                                <option value="1">l</option>
                                                <option value="1">xl</option>
                                                <option value="1">xxl</option>
                                            </select>
                                        </div>
                                        <div class="variants_color">
                                            <h2>color</h2>
                                            <select class="select_option">
                                                <option selected="" value="1">purple</option>
                                                <option value="1">violet</option>
                                                <option value="1">black</option>
                                                <option value="1">pink</option>
                                                <option value="1">orange</option>
                                            </select>
                                        </div>
                                        <div class="modal_add_to_cart">
                                            <form action="#">
                                                <input min="0" max="100" step="2" value="1" type="number">
                                                <button type="submit">add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal_social">
                                        <h2>Share this product</h2>
                                        <ul>
                                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                            <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
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
@endsection
