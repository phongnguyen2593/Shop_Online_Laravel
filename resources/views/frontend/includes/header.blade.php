    <!--Offcanvas menu area start-->
    <div class="off_canvars_overlay">

    </div>
    <div class="Offcanvas_menu">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="canvas_open">
                        <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                    </div>
                    <div class="Offcanvas_menu_wrapper">
                        <div class="canvas_close">
                            <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                        </div>
                        <div class="support_info">
                            <p>Điện thoại: <a href="tel:+84968481775">0968 481 775</a></p>
                        </div>
                        <div class="top_right text-right">
                            <ul>
                                @guest
                                    <li><a href="{{ route('login') }}"> Đăng nhập </a></li>
                                @else
                                    <li><a href="{{ route('frontend.user.index') }}"> Tài khoản </a></li>
                                @endguest

                                <li><a href="{{ route('frontend.cart.check-out') }}"> Thanh toán </a></li>
                            </ul>
                        </div>
                        <div class="search_container">
                            <form action="{{ route('frontend.search') }}" method="POST">
                                @csrf
                                <div class="search_box">
                                    <input placeholder="Nhập tên sản phẩm" type="text" name="key" id="search_key">
                                    <button type="submit">Tìm kiếm</button>
                                </div>
                            </form>
                        </div>

                        <div class="middel_right_info">
                            <div class="header_wishlist">
                                <a href="{{ route('frontend.user.wishlist') }}"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                <span class="wishlist_quantity">3</span>
                            </div>
                            <div class="mini_cart_wrapper">
                                <a href="javascript:void(0)"><i class="fa fa-shopping-bag"
                                        aria-hidden="true"></i>{{ Cart::total() }} <i class="fa fa-angle-down"></i></a>
                                <span class="cart_quantity">{{ Cart::count() }}</span>
                                <!--mini cart-->
                                <div class="mini_cart">
                                    @if (isset($items))
                                        <p>hahaha</p>
                                    @else
                                        <p>Không có sản phẩm</p>
                                    @endif
                                    <div class="mini_cart_table">
                                        <div class="cart_total">
                                            <span>Tạm tính:</span>
                                            <span class="price">{{ Cart::total() }} VND</span>
                                        </div>
                                        <div class="cart_total mt-10">
                                            <span>Tổng tiền:</span>
                                            <span class="price">{{ Cart::total() }} VND</span>
                                        </div>
                                    </div>

                                    <div class="mini_cart_footer">
                                        <div class="cart_button">
                                            <a href="{{ route('frontend.cart.index') }}">View cart</a>
                                        </div>
                                        <div class="cart_button">
                                            <a href="checkout.html">Checkout</a>
                                        </div>

                                    </div>

                                </div>
                                <!--mini cart end-->
                            </div>
                        </div>
                        <div id="menu" class="text-left ">
                            <ul class="offcanvas_main_menu">
                                <li class="menu-item-has-children active">
                                    <a href="#">Trang chủ</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Shop</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="#">Shop Layouts</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.html">shop</a></li>
                                                <li><a href="shop-fullwidth.html">Full Width</a></li>
                                                <li><a href="shop-fullwidth-list.html">Full Width list</a></li>
                                                <li><a href="shop-right-sidebar.html">Right Sidebar </a></li>
                                                <li><a href="shop-right-sidebar-list.html"> Right Sidebar list</a></li>
                                                <li><a href="shop-list.html">List View</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">other Pages</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ route('frontend.cart.index') }}">cart</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="{{ route('login') }}">my account</a></li>
                                                <li><a href="404.html">Error 404</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Product Types</a>
                                            <ul class="sub-menu">
                                                <li><a href="product-details.html">product details</a></li>
                                                <li><a href="product-sidebar.html">product sidebar</a></li>
                                                <li><a href="product-grouped.html">product grouped</a></li>
                                                <li><a href="variable-product.html">product variable</a></li>
                                                <li><a href="product-countdown.html">product countdown</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html">blog</a></li>
                                        <li><a href="blog-details.html">blog details</a></li>
                                        <li><a href="blog-fullwidth.html">blog fullwidth</a></li>
                                        <li><a href="blog-sidebar.html">blog left sidebar</a></li>
                                        <li><a href="blog-no-sidebar.html">blog no sidebar</a></li>
                                    </ul>

                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">pages </a>
                                    <ul class="sub-menu">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="services.html">services</a></li>
                                        <li><a href="privacy-policy.html">privacy policy</a></li>
                                        <li><a href="faq.html">Frequently Questions</a></li>
                                        <li><a href="contact.html">contact</a></li>
                                        <li><a href="login.html">login</a></li>
                                        <li><a href="404.html">Error 404</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="{{ route('login') }}">my account</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="about.html">about Us</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="contact.html"> Contact Us</a>
                                </li>
                            </ul>
                        </div>

                        <div class="Offcanvas_footer">
                            <span><a href="#"><i class="fa fa-envelope-o"></i> info@yourdomain.com</a></span>
                            <ul>
                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="pinterest"><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Offcanvas menu area end-->

    <header>
        <div class="main_header">
            <!--header top start-->
            <div class="header_top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="support_info">
                                <p>Điện thoại: <a href="tel:+84968481775">0968 481 775</a></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="top_right text-right">
                                <ul>
                                    @guest
                                        <li><a href="{{ route('login') }}"> Đăng nhập </a></li>
                                        <li><a href="{{ route('register') }}"> Đăng ký </a></li>
                                    @else
                                        <li><a href="{{ route('frontend.user.index') }}"> Tài khoản </a></li>
                                    @endguest
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--header top start-->
            <!--header middel start-->
            <div class="header_middle">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-6">
                            <div class="logo">
                                <a href="{{ route('frontend.index') }}"><img src="/frontend/assets/img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-6">
                            <div class="middel_right">
                                <div class="search_container">
                                    <form action="{{  route('frontend.search') }}" method="POST">
                                        @csrf
                                        <div class="search_box">
                                            <input placeholder="Nhập từ khóa" type="text" name="key" id="search_key">
                                            <button type="submit">Tìm kiếm</button>
                                            <div id="ajax-autocomplete"></div>
                                        </div>
                                    </form>
                                </div>
                                <div class="middel_right_info">
                                    <div class="header_wishlist">
                                        <a href="{{ route('frontend.user.wishlist') }}"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        <span class="wishlist_quantity">0</span>
                                    </div>
                                    <div class="mini_cart_wrapper">
                                        <a href="javascript:void(0)"><i class="fa fa-shopping-bag"
                                                aria-hidden="true"></i>{{ Cart::count() }} <i class="fa fa-angle-down"></i></a>
                                        <span class="cart_quantity">0</span>
                                        <!--mini cart-->
                                        <div class="mini_cart">
                                            @if (isset($items))
                                                @foreach ($items as $item)
                                                    <div class="cart_item">
                                                        <div class="cart_img">
                                                            <a href="#"><img
                                                                    src="{{ asset($item->options->thumbnail) }}"
                                                                    alt=""></a>
                                                        </div>
                                                        <div class="cart_info">
                                                            <a href="#">{{ $item->name }}</a>
                                                            <p>SL: {{ $item->qty }} X <span> {{ number_format($item->price) }} VND</span></p>
                                                        </div>
                                                        <div class="cart_remove">
                                                            <a href="{{ route('frontend.cart.remove', $item->rowId) }}"><i class="ion-android-close"></i></a>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @else
                                                <p>Không có sản phẩm</p>
                                            @endif
                                            <div class="mini_cart_table">
                                                <div class="cart_total">
                                                    <span>Tạm tính:</span>
                                                    <span class="price">{{ Cart::total() }} VND</span>
                                                </div>
                                                <div class="cart_total mt-10">
                                                    <span>Tổng tiền:</span>
                                                    <span class="price">{{ Cart::total() }} VND</span>
                                                </div>
                                            </div>

                                            <div class="mini_cart_footer">
                                                <div class="cart_button">
                                                    <a href="{{ route('frontend.cart.index') }}">Xem giỏ hàng</a>
                                                </div>
                                                <div class="cart_button">
                                                    <a href="checkout.html">thanh toán</a>
                                                </div>

                                            </div>

                                        </div>
                                        <!--mini cart end-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--header middel end-->
            <!--header bottom satrt-->
            <div class="main_menu_area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-12">
                            <div class="categories_menu">
                                <div class="categories_title">
                                    <h2 class="categori_toggle">DANH MỤC</h2>
                                </div>
                                <div class="categories_menu_toggle">
                                    <ul>
                                        @foreach ($categories as $category)
                                            <li class="{{ count($category->childs) ? 'menu_item_children' : '' }}"><a
                                                    href="#"> {{ $category->name }}
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                                @if (count($category->childs))
                                                    @include('frontend.includes.sub-menu', ['childs' =>
                                                    $category->childs])
                                                @endif
                                            </li>

                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-12">
                            <div class="main_menu menu_position">
                                <nav>
                                    <ul>
                                        <li><a class="active" href="{{ route('frontend.index') }}">Trang chủ</a></li>
                                        <li><a href="{{ route('frontend.product.index') }}">Sản Phẩm</i></a></li>
                                        <li><a href="#">thương hiệu <i class="fa fa-angle-down"></i></a>
                                            <ul class="sub_menu pages">
                                                @foreach ($randBrands as $item)
                                                    <li><a href="about.html">{{ $item->name }}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li><a href="#">tra cứu đơn hàng</i></a>
                                            <ul class="sub_menu pages" style="width: 420px;">
                                                <li>
                                                    <form action="{{  route('frontend.tracking') }}" method="POST">
                                                        @csrf
                                                        <div class="search_box">
                                                            <input placeholder="Nhập mã đơn hàng" type="text" name="code">
                                                            <button type="submit">Tìm kiếm</button>
                                                        </div>
                                                    </form>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="blog.html">blog</a> </li>

                                        <li><a href="contact.html"> Liên hệ</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--header bottom end-->
        </div>
    </header>

    <!--sticky header area start-->
    <div class="sticky_header_area sticky-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="logo">
                        <a href="{{ route('frontend.index') }}"><img src="/frontend/assets/img/logo/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="sticky_header_right menu_position">
                        <div class="main_menu">
                            <nav>
                                <ul>
                                    <li><a class="active" href="{{ route('frontend.index') }}">Trang chủ</i></a>
                                    </li>
                                    <li class="mega_items"><a href="{{ route('frontend.product.index') }}">sản phẩm</a>
                                    </li>
                                    <li><a href="blog.html">thương hiệu<i class="fa fa-angle-down"></i></a>
                                        <ul class="sub_menu pages">
                                            @foreach ($randBrands as $item)
                                                <li><a href="">{{ $item->name }}</a></li>
                                            @endforeach

                                        </ul>
                                    </li>
                                    <li><a href="#">blog </i></a></li>
                                    <li><a href="contact.html"> liên hệ</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="middel_right_info">
                            <div class="header_wishlist">
                                <a href="{{route('frontend.user.wishlist')}}"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                <span class="wishlist_quantity">3</span>
                            </div>
                            <div class="mini_cart_wrapper">
                                <a href="javascript:void(0)"><i class="fa fa-shopping-bag"
                                        aria-hidden="true"></i>{{ Cart::total() }}<i class="fa fa-angle-down"></i></a>
                                <span class="cart_quantity">{{ Cart::count() }}</span>
                                <!--mini cart-->
                                <div class="mini_cart">
                                    <div class="mini_cart_table">
                                        @if (isset($items))
                                                @foreach ($items as $item)
                                                    <div class="cart_item">
                                                        <div class="cart_img">
                                                            <a href="#"><img
                                                                    src="{{ asset($item->options->thumbnail) }}"
                                                                    alt=""></a>
                                                        </div>
                                                        <div class="cart_info">
                                                            <a href="#">{{ $item->name }}</a>
                                                            <p>SL: {{ $item->qty }} X <span> {{ number_format($item->price) }} VND</span></p>
                                                        </div>
                                                        <div class="cart_remove">
                                                            <a href="{{ route('frontend.cart.remove', $item->rowId) }}"><i class="ion-android-close"></i></a>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @else
                                                <p>Không có sản phẩm</p>
                                            @endif
                                        <div class="cart_total">
                                            <span>Tạm tính:</span>
                                            <span class="price">{{ Cart::total() }} VND</span>
                                        </div>
                                        <div class="cart_total mt-10">
                                            <span>Tổng tiền:</span>
                                            <span class="price">{{ Cart::total() }} VND</span>
                                        </div>
                                    </div>

                                    <div class="mini_cart_footer">
                                        <div class="cart_button">
                                            <a href="{{ route('frontend.cart.index') }}">Xem giỏ hàng</a>
                                        </div>
                                        <div class="cart_button">
                                            <a href="{{ route('frontend.cart.check-out') }}">thanh toán</a>
                                        </div>

                                    </div>

                                </div>
                                <!--mini cart end-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--sticky header area end-->
