@extends('frontend.layouts.master')

@section('banner')
    <div class="banner-top">
        <div class="container">
            <h3>Liên hệ </h3>
            <h4><a href="{{ route('frontend.index') }}">Trang chủ</a><label>/</label>Liên hệ</h4>
            <div class="clearfix"> </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="contact">
        <div class="container">
            <div class="spec ">
                <h3>Liên hệ</h3>
                <div class="ser-t">
                    <b></b>
                    <span><i></i></span>
                    <b class="line"></b>
                </div>
            </div>
            <div class=" contact-w3">
                <div class="col-md-5 contact-right">
                    <img src="images/cac.jpg" class="img-responsive" alt="">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.9873301841685!2d105.84695891476261!3d20.99314498601766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac6dce1c3075%3A0x1151330eb74574fe!2zSOG7hyB0aOG7kW5nIGdpw6FvIGThu6VjIHbDoCBjw7RuZyBuZ2jhu4cgWmVudA!5e0!3m2!1svi!2s!4v1606154929922!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>             
                </div>
                <div class="col-md-7 contact-left">
                    <h4>Thông tin liên hệ</h4>
                    <ul class="contact-list">
                        {{-- <li><i class="fa fa-map-marker" aria-hidden="true"></i>Zent Group - Số 2 ngõ Trại Cá, Trương Định, Hoàng Mai, Hà nội.</li> --}}
                        <li><i class="fa fa-envelope" aria-hidden="true"></i>
                            <a href="mailto:phongnguyen2593@mail.com">phongnguyen2593@gmail.com</a>
                        </li>
                        <li> <i class="fa fa-phone" aria-hidden="true"></i>096 848 1775</li>
                    </ul>
                    <div id="container">
                        <!--Horizontal Tab-->
                        <div id="parentHorizontalTab">
                            <ul class="resp-tabs-list hor_1">
                                <li><i class="fa fa-envelope" aria-hidden="true"></i></li>
                                <li> <i class="fa fa-map-marker" aria-hidden="true"></i> </span></li>
                                <li> <i class="fa fa-phone" aria-hidden="true"></i></li>
                            </ul>
                            <div class="resp-tabs-container hor_1">
                                <div>
                                    <form action="#" method="post">
                                        <input type="text" value="Họ tên" name="Name" onfocus="this.value = '';"
                                            onblur="if (this.value == '') {this.value = 'Họ tên';}" required="">
                                        <input type="email" value="Email" name="Email" onfocus="this.value = '';"
                                            onblur="if (this.value == '') {this.value = 'Email';}" required="">
                                        <textarea name="Nội dung ..." onfocus="this.value = '';"
                                            onblur="if (this.value == '') {this.value = 'Nội dung ...';}"
                                            required="">Nội dung ...</textarea>
                                        <input type="submit" value="Gửi">
                                    </form>
                                </div>
                                <div>
                                    <div class="map-grid">
                                        <h5>Địa chỉ</h5>
                                        <ul>
                                            <li><i class="fa fa-arrow-right" aria-hidden="true"></i>Zent Group - Số 2 ngõ Trại Cá, Trương Định, Hoàng Mai, Hà Nội</li>
                                        </ul>
                                    </div>
                                </div>
                                <div>
                                    <div class="map-grid">
                                        <h5>Liện hệ qua</h5>
                                        <ul>
                                            <li>Điện thoại : (+84) 96 848 1775</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
@endsection

@section('script')

    <!--Plug-in Initialisation-->
    <script type="text/javascript">
        $(document).ready(function() {
            //Horizontal Tab
            $('#parentHorizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true, // 100% fit in a container
                tabidentify: 'hor_1', // The tab groups identifier
                activate: function(event) { // Callback function if tab is switched
                    var $tab = $(this);
                    var $info = $('#nested-tabInfo');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });

            // Child Tab
            $('#ChildVerticalTab_1').easyResponsiveTabs({
                type: 'vertical',
                width: 'auto',
                fit: true,
                tabidentify: 'ver_1', // The tab groups identifier
                activetab_bg: '#fff', // background color for active tabs in this group
                inactive_bg: '#F5F5F5', // background color for inactive tabs in this group
                active_border_color: '#c1c1c1', // border color for active tabs heads in this group
                active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
            });

            //Vertical Tab
            $('#parentVerticalTab').easyResponsiveTabs({
                type: 'vertical', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true, // 100% fit in a container
                closed: 'accordion', // Start closed if in accordion view
                tabidentify: 'hor_1', // The tab groups identifier
                activate: function(event) { // Callback function if tab is switched
                    var $tab = $(this);
                    var $info = $('#nested-tabInfo2');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });
        });

    </script>

    <script src="/frontend/shop/js/easyResponsiveTabs.js" type="text/javascript"></script>

@endsection
