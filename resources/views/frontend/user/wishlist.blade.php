@extends('frontend.layouts.master')

@section('content')
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li><a href="{{ route('frontend.user.index') }}">Tài khoản</a></li>
                            <li>Yêu thích</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->


    <!--wishlist area start -->
    <div class="wishlist_area mt-60">
        <div class="container">
            <form action="#">
                <div class="row">
                    <div class="col-12">
                        <div class="table_desc wishlist">
                            <div class="cart_page table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            {{-- <th class="product_remove">Delete</th> --}}
                                            <th class="product_thumb">Image</th>
                                            <th class="product_name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product_quantity">Stock Status</th>
                                            <th class="product_total">Add To Cart</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="product_thumb"><a href="#"><img
                                                        src="/frontend/assets/img/s-product/product3.jpg" alt=""></a></td>
                                            <td class="product_name"><a href="#">Handbag elit</a></td>
                                            <td class="product-price">£80.00</td>
                                            <td class="product_quantity">In Stock</td>
                                            <td class="product_total"><a href="#">Add To Cart</a></td>
                                            <td class="product_total"><a href="#" class="btn-delete">delete</a></td>
                                            
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--wishlist area end -->
@endsection

@section('css')
    <style>
        .btn-delete {
            background-color: #dc3545 !important;
        }

        .btn-delete:hover {
            background-color: #ac2734 !important;
        }
    </style>
@endsection