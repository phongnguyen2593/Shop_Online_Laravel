@extends('frontend.layouts.master')

@section('content-top')
    <div class="banner-top">
        <div class="container">
            <h3>Yêu thích</h3>
            <h4><a href="{{ route('frontend.index') }}">Trang chủ</a><label>/</label>Yêu thích</h4>
            <div class="clearfix"> </div>
        </div>
    </div>
@endsection

@section('content-mid')
    <div class="container">
        <p>Chưa có sản phẩm</p>
    </div>

    <div class="check-out">
        <div class="container">
            <div class="spec ">
                <h3>Wishlist</h3>
                <div class="ser-t">
                    <b></b>
                    <span><i></i></span>
                    <b class="line"></b>
                </div>
            </div>
            
            <table class="table ">
                <tr>
                    <th class="t-head head-it ">Sản phẩm</th>
                    <th class="t-head">Đơn giá</th>
                    <th class="t-head">Số lượng</th>

                    <th class="t-head"></th>
                </tr>
                <tr class="cross">
                    <td class="ring-in t-data">
                        <a href="single.html" class="at-in">
                            <img src="/frontend/shop/images/wi.png" class="img-responsive" alt="">
                        </a>
                        <div class="sed">
                            <h5>Sed ut perspiciatis unde</h5>
                        </div>
                        <div class="clearfix"> </div>
                        <div class="close1"> <i class="fa fa-times" aria-hidden="true"></i></div>
                    </td>
                    <td class="t-data">$10.00</td>
                    <td class="t-data">
                        <div class="quantity">
                            <div class="quantity-select">
                                <div class="entry value-minus">&nbsp;</div>
                                <div class="entry value"><span class="span-1">1</span></div>
                                <div class="entry value-plus active">&nbsp;</div>
                            </div>
                        </div>

                    </td>

                    <td class="t-data t-w3l"><a class=" add-1" href="single.html">Thêm vào giỏ hàng</a></td>

                </tr>
                <tr class="cross1">
                    <td class="t-data ring-in"><a href="single.html" class="at-in"><img src="/frontend/shop/images/wi1.png"
                                class="img-responsive" alt=""></a>
                        <div class="sed">
                            <h5>Sed ut perspiciatis unde</h5>
                        </div>
                        <div class="clearfix"> </div>
                        <div class="close2"> <i class="fa fa-times" aria-hidden="true"></i></div>
                    </td>
                    <td class="t-data">$20.00</td>
                    <td class="t-data">
                        <div class="quantity">
                            <div class="quantity-select">
                                <div class="entry value-minus">&nbsp;</div>
                                <div class="entry value"><span class="span-1">1</span></div>
                                <div class="entry value-plus active">&nbsp;</div>
                            </div>
                        </div>

                    </td>

                    <td class="t-data t-w3l"><a class=" add-1" href="single.html">Thêm vào giỏ hàng</a></td>

                </tr>
                <tr class="cross2">
                    <td class="t-data ring-in"><a href="single.html" class="at-in"><img src="/frontend/shop/images/wi2.png"
                                class="img-responsive" alt=""></a>
                        <div class="sed">
                            <h5>Sed ut perspiciatis unde</h5>
                        </div>
                        <div class="clearfix"> </div>
                        <div class="close3"> <i class="fa fa-times" aria-hidden="true"></i></div>
                    </td>
                    <td class="t-data">$15.00</td>
                    <td class="t-data">
                        <div class="quantity">
                            <div class="quantity-select">
                                <div class="entry value-minus">&nbsp;</div>
                                <div class="entry value"><span class="span-1">1</span></div>
                                <div class="entry value-plus active">&nbsp;</div>
                            </div>
                        </div>

                    </td>

                    <td class="t-data"><a class=" add-1" href="single.html">Thêm vào giỏ hàng</a></td>

                </tr>
            </table>
        </div>
    </div>
@endsection

@section('script')
    <!--quantity-->
    <script>
        $('.value-plus').on('click', function() {
            var divUpd = $(this).parent().find('.value'),
                newVal = parseInt(divUpd.text(), 10) + 1;
            divUpd.text(newVal);
        });

        $('.value-minus').on('click', function() {
            var divUpd = $(this).parent().find('.value'),
                newVal = parseInt(divUpd.text(), 10) - 1;
            if (newVal >= 1) divUpd.text(newVal);
        });

    </script>
    <!--quantity-->

    <script>
        $(document).ready(function(c) {
            $('.close1').on('click', function(c) {
                $('.cross').fadeOut('slow', function(c) {
                    $('.cross').remove();
                });
            });
        });

    </script>
    <script>
        $(document).ready(function(c) {
            $('.close2').on('click', function(c) {
                $('.cross1').fadeOut('slow', function(c) {
                    $('.cross1').remove();
                });
            });
        });

    </script>
    <script>
        $(document).ready(function(c) {
            $('.close3').on('click', function(c) {
                $('.cross2').fadeOut('slow', function(c) {
                    $('.cross2').remove();
                });
            });
        });

    </script>
@endsection
