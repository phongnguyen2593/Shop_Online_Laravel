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
                            <li><a href="{{ route('frontend.product.index') }}">Sản phẩm</a></li>
                            <li>Chi tiết sản phẩm</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--product details start-->
    <div class="product_details mt-60 mb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product-details-tab">
                        <div id="img-1" class="zoomWrapper single-zoom">
                            <a href="#">
                                <img id="zoom1" src="{{ asset($product->thumbnail) }}"
                                    data-zoom-image="{{ asset($product->thumbnail) }}" alt="big-1">
                            </a>
                        </div>
                        <div class="single-zoom-thumb">
                            <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
                                @if ($product->images != null)
                                    @foreach ($product->images as $image)
                                        <li>
                                            <a href="#" class="elevatezoom-gallery active" data-update=""
                                                data-image="{{ asset($image->path) }}"
                                                >
                                                <img src="{{ asset($image->path) }}" >
                                            </a>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product_d_right">
                        <form action="{{ route('frontend.cart.add', $product->id) }}" method="GET">

                            <h1>{{ $product->name }}</h1>
                            <div class=" product_ratting">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="review"><a href="#"> (customer review ) </a></li>
                                </ul>
                            </div>
                            <div class="price_box">
                                @if ($product->sale_price == $product->origin_pice)
                                    <span class="current_price">{{ number_format($product->sale_price) }} đ</span>
                                @else
                                    <span class="current_price">{{ number_format($product->sale_price) }} đ</span>
                                    <span class="old_price">{{ number_format($product->origin_price) }} đ</span>
                                @endif
                            </div>
                            <div class="product_variant quantity">
                                <label>Số lượng</label>
                                <input min="1" max="100" value="1" type="number">
                                <button class="button" type="submit">Thêm vào giỏ hàng</button>

                            </div>
                            <div class=" product_d_action">
                                <ul>
                                    <li><a href="#" title="Add to wishlist">+ Thêm vào Yêu thích</a></li>
                                </ul>
                            </div>
                            <div class="product_meta">
                                <span>Danh mục: <a href="#">{{ $product->category->name }}</a></span>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product details end-->

    <!--product info start-->
    <div class="product_d_info mb-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_d_inner">
                        <div class="product_info_button">
                            <ul class="nav" role="tablist">
                                <li>
                                    <a class="active" data-toggle="tab" href="#info" role="tab" aria-controls="info"
                                        aria-selected="false">Mô tả</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#sheet" role="tab" aria-controls="sheet"
                                        aria-selected="false">Thông tin</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews"
                                        aria-selected="false">Đánh giá</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="info" role="tabpanel">
                                <div class="product_info_content">
                                    @if ($product->description !=null)
                                        {{ $product->description }}
                                    @else
                                        <p>Không có mô tả</p>
                                    @endif
                                </div>
                            </div>
                            <div class="tab-pane fade" id="sheet" role="tabpanel">
                                <div class="product_d_table">
                                    <form action="#">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="first_child">Thương hiệu</td>
                                                    <td>{{ $product->brand->name }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="first_child">Xuất xứ</td>
                                                    <td>Việt Nam</td>
                                                </tr>
                                                <tr>
                                                    <td class="first_child">Hạn sử dụng</td>
                                                    <td>Xem trên bao bì</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="reviews" role="tabpanel">
                                <div class="reviews_wrapper">
                                    <h2>1 review for Donec eu furniture</h2>
                                    <div class="reviews_comment_box">
                                        <div class="comment_thmb">
                                            <img src="/frontend/assets/img/blog/comment2.jpg" alt="">
                                        </div>
                                        <div class="comment_text">
                                            <div class="reviews_meta">
                                                <p><strong>admin </strong>- September 12, 2018</p>
                                                <span>roadthemes</span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="product_review_form">
                                        <form action="{{ route('frontend.user.store-comment', $product->id) }}" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="review_comment">Gửi bình luận </label>
                                                    <textarea name="comment" id="review_comment"></textarea>
                                                </div>
                                            </div>
                                            <button type="submit">Gửi</button>
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
    <!--product info end-->

    <!--related product area start-->
    <section class="product_area related_products">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>Sản phẩm liên quan </h2>
                    </div>
                </div>
            </div>
            <div class="product_carousel product_column5 owl-carousel">
                @foreach ($relatedProduct as $item)
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a class="primary_img" href="{{ route('frontend.product.detail', $item->id) }}"><img
                                        src="{{ asset($item->thumbnail) }}" alt=""></a>
                                <div class="label_product">
                                    @if ($item->discount_percent != 0)
                                        <span class="label_sale">{{ $item->discount_percent }}%</span>
                                    @endif
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="wishlist.html" title="Yêu thích"><i
                                                    class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#relatedProduct{{ $item->id }}"
                                                title="Xem nhanh"> <span class="ion-ios-search-strong"></span></a></li>
                                    </ul>
                                </div>
                                <div class="add_to_cart">
                                    <a href="{{ route('frontend.cart.add', $item->id) }}">Thêm vào giỏ hàng</a>
                                </div>
                            </div>
                            <figcaption class="product_content">
                                <div class="price_box">
                                    @if ($item->sale_price == $item->origin_price)
                                        <span class="current_price">{{ number_format($item->sale_price) }} đ</span>
                                    @else
                                        <span class="old_price">{{ number_format($item->origin_price) }} đ</span>
                                        <span class="current_price">{{ number_format($item->sale_price) }} đ</span>
                                    @endif
                                </div>
                                <h3 class="product_name"><a
                                        href="{{ route('frontend.product.detail', $item->slug) }}">{{ $item->name }}</a>
                                </h3>
                            </figcaption>
                        </figure>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
    <!--product area end-->

    <!--product area start-->
    <section class="product_area upsell_products">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>Sản phẩm giảm giá </h2>
                    </div>
                </div>
            </div>
            <div class="product_carousel product_column5 owl-carousel">
                @foreach ($randSaleProducts as $item)
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a class="primary_img" href="{{ route('frontend.product.detail', $item->slug) }}"><img
                                        src="{{ asset($item->thumbnail) }}" alt=""></a>
                                <div class="label_product">
                                    @if ($item->discount_percent != 0)
                                        <span class="label_sale">{{ $item->discount_percent }}%</span>
                                    @endif
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="wishlist.html" title="Yêu thích"><i
                                                    class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#randSaleProducts{{ $item->id }}"
                                                title="Xem nhanh"> <span class="ion-ios-search-strong"></span></a></li>
                                    </ul>
                                </div>
                                <div class="add_to_cart">
                                    <a href="{{ route('frontend.cart.add', $item->id) }}">Thêm vào giỏ hàng</a>
                                </div>
                            </div>
                            <figcaption class="product_content">
                                <div class="price_box">
                                    @if ($item->sale_price == $item->origin_price)
                                        <span class="current_price">{{ number_format($item->sale_price) }} đ</span>
                                    @else
                                        <span class="old_price">{{ number_format($item->origin_price) }} đ</span>
                                        <span class="current_price">{{ number_format($item->sale_price) }} đ</span>
                                    @endif
                                </div>
                                <h3 class="product_name"><a
                                        href="{{ route('frontend.product.detail', $item->slug) }}">{{ $item->name }}</a>
                                </h3>
                            </figcaption>
                        </figure>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
    <!--product area end-->
    <!-- modal area start-->
    @foreach ($relatedProduct as $item)
        <div class="modal fade" id="relatedProduct{{ $item->id }}" tabindex="-1" role="dialog" aria-hidden="true">
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
                                            <div class="tab-pane fade show active" id="new{{ $item->id }}tab"
                                                role="tabpanel">
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
                                            @if ($item->sale_price != $item->origin_price)
                                                <span class="old_price">{{ number_format($item->origin_price) }} đ</span>
                                            @endif
                                        </div>
                                        <div class="modal_description mb-15">
                                            <p>{{ $item->description != null ? $item->description : 'Không có mô tả' }}</p>
                                        </div>
                                        <div class="variants_selects">
                                            <div class="modal_add_to_cart">
                                                <form action="{{ route('frontend.cart.add', $item->id) }}">
                                                    <input min="0" max="100" step="1" value="1" type="number"
                                                        name="quantity">
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
    @foreach ($relatedProduct as $item)
        <div class="modal fade" id="randSaleProducts{{ $item->id }}" tabindex="-1" role="dialog" aria-hidden="true">
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
                                            <div class="tab-pane fade show active" id="new{{ $item->id }}tab"
                                                role="tabpanel">
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
                                            @if ($item->sale_price != $item->origin_price)
                                                <span class="old_price">{{ number_format($item->origin_price) }} đ</span>
                                            @endif
                                        </div>
                                        <div class="modal_description mb-15">
                                            <p>{{ $item->description != null ? $item->description : 'Không có mô tả' }}</p>
                                        </div>
                                        <div class="variants_selects">
                                            <div class="modal_add_to_cart">
                                                <form action="{{ route('frontend.cart.add', $item->id) }}">
                                                    <input min="0" max="100" step="1" value="1" type="number"
                                                        name="quantity">
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
