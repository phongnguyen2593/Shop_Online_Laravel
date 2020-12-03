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
                            <li><a href="">Sản phẩm</a></li>
                            <li>Giỏ hàng</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--shopping cart area start -->
    <div class="shopping_cart_area mt-60">
        <div class="container">
            @if (Cart::total() != 0)
                <form action="#">
                    <div class="row">
                        <div class="col-12">
                            <div class="table_desc">
                                <div class="cart_page table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product_remove">Xóa</th>
                                                <th class="product_thumb">Hình ảnh</th>
                                                <th class="product_name">Sản phẩm</th>
                                                <th class="product-price">Giá bán</th>
                                                <th class="product_quantity">Số lượng</th>
                                                <th class="product_total">Tổng</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($item as $item)
                                                <tr>
                                                    <td class="product_remove"><a
                                                            href="{{ route('frontend.cart.remove', $item->rowId) }}"><i
                                                                class="fa fa-trash-o"></i></a>
                                                    </td>
                                                    <td class="product_thumb"><a href="#"><img
                                                                src="/frontend/assets/img/s-product/product.jpg" alt=""></a>
                                                    </td>
                                                    <td class="product_name"><a href="#">{{ $item->name }}</a></td>
                                                    <td class="product-price">{{ number_format($item->price) }} đ</td>
                                                    <td class="product_quantity"><label>Quantity</label> <input min="1"
                                                            max="100" value="{{ $item->qty }}" type="number"></td>
                                                    <td class="product_total">{{ number_format($item->price * $item->qty) }}
                                                        đ</td>


                                                </tr>
                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>
                                <div class="cart_submit">
                                    <button type="submit">Cập nhật giỏ hàng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--coupon code area start-->
                    <div class="coupon_area">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="coupon_code left">
                                    <h3>Mã giảm giá</h3>
                                    <div class="coupon_inner">
                                        <p>Nhập mã giảm giá.</p>
                                        <input placeholder="Mã giảm giá" type="text">
                                        <button type="submit">Xác nhận</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="coupon_code right">
                                    <h3>Cart Totals</h3>
                                    <div class="coupon_inner">
                                        <div class="cart_subtotal">
                                            <p>Subtotal</p>
                                            <p class="cart_amount">£215.00</p>
                                        </div>
                                        <div class="cart_subtotal ">
                                            <p>Phí giao hàng</p>
                                            <p class="cart_amount"> £255.00</p>
                                        </div>
                                        <a href="#">Calculate shipping</a>

                                        <div class="cart_subtotal">
                                            <p>Thành tiền</p>
                                            <p class="cart_amount">£215.00</p>
                                        </div>
                                        <div class="checkout_btn">
                                            <a href="#">Tiến hành đặt hàng</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--coupon code area end-->
                </form>
            @else
                <p>Không có sản phẩm trong giỏ hàng</p>
            @endif
        </div>
    </div>
    <!--shopping cart area end -->
@endsection
