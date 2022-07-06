<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.hasthemes.com/circleshop/circleshop/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 30 May 2021 03:44:19 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Circle shop - eCommerce HTML5 Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('frontend')}}/assets/images/favicon.ico">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap Min Css -->
    <link rel="stylesheet" href="{{url('frontend')}}/assets/css/vendor/bootstrap.min.css">
    <!-- Font Awesome Css -->
    <link rel="stylesheet" href="{{url('frontend')}}/assets/css/vendor/font-awesome.min.css">
    <!-- Material Design Font Css -->
    <link rel="stylesheet" href="{{url('frontend')}}/assets/css/vendor/material-design-iconic-font.min.css">
    <!-- Animate Css -->
    <link rel="stylesheet" href="{{url('frontend')}}/assets/css/vendor/animate.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{url('frontend')}}/assets/css/plugins/magnific-popup.css">
    <!-- jQuery UI CSS -->
    <link rel="stylesheet" href="{{url('frontend')}}/assets/css/plugins/jquery-ui.min.css">
    <!-- Plugin CSS -->
    <link rel="stylesheet" href="{{url('frontend')}}/assets/css/plugins/plugins.css">


    <!-- Style CSS -->
    <link rel="stylesheet" href="{{url('frontend')}}/assets/css/style.css">

</head>

<body>

    <!-- ========================
    Offcanvas Menu Area Start 
    ===========================-->
    <div class="offcanvas_overlay">

    </div>
    <div class="offcanvas_menu">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="canvas_open">
                        <a href="#"><i class="zmdi zmdi-menu"></i></a>
                    </div>
                    <div class="offcanvas_menu_wrapper">
                        <div class="canvas_close">
                            <a href="#"><i class="zmdi zmdi-close"></i></a>
                        </div>
                        <div class="offcanvas-search-container mb-40">
                            <form action="#">
                                <div class="search_box">
                                    <input placeholder="Search entire store here ..." type="text">
                                    <button type="submit">Search</button>
                                </div>
                            </form>
                        </div>
                        <!-- Offcanvas Menu Start -->
                        <div class="offcanvas_menu_cover text-left">
                            <ul class="offcanvas_main_menu" style="font-family:Lato sans-serif">
                                <li class="menu-item-has-children active">
                                    <a href="{{route('home')}}">Trang chủ</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="{{route('product')}}">Sản phẩm</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="{{route('show')}}">Giỏ hàng</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="{{route('checkout')}}">Thanh toán</a>
                                </li>
                                    <li class="menu-item-has-children">
                                        @if(Auth::check())
                                        <a href="#">{{Auth::user()->name}}</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{route('logout')}}">Đăng xuất</a></li>
                                        </ul>
                                        @else
                                        <a href="#">Tài khoản</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{route('login')}}">Đăng nhập</a></li>
                                            <li><a href="{{route('register')}}">Đăng ký</a></li>
                                        </ul>
                                        @endif
                                    </li>
                            </ul>
                        </div>
                        <!-- Offcanvas Menu End -->
                        <div class="offcanvas_footer">
                            <span><a href="#"><i class="fa fa-envelope-o"></i> info@yourdomain.com</a></span>
                            <div class="footer_social">
                                <ul class="d-flex">
                                    <li><a class="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                    <li><a class="youtube" href="#"><i class="zmdi zmdi-youtube"></i></a></li>
                                    <li><a class="google" href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
                                    <li><a class="linkedin" href="#"><i class="zmdi zmdi-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========================
    Offcanvas Menu Area End 
    ===========================-->

    <!-- =================
    Header Area Start 
    =====================-->
    <div class="header-area header-three">
        <!-- Header Top Start -->
        <!-- Header Top End -->
        <!-- Header Middle Start -->
        <div class="header-middle space-40 sticker">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-6">
                        <div class="logo">
                            <a href="{{route('home')}}"><img src="{{url('frontend')}}/assets/images/logo/pos-circle-logo.jpg" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-6">
                        <div class="header-middle-inner">
                            <!-- Main Menu Start -->
                            <div class="header-menu float-left add-sticky">
                                <div class="sticky-container">
                                    <div class="logo">
                                        <a href="{{route('home')}}"><img src="{{url('frontend')}}/assets/images/logo/pos-circle-logo.jpg" alt="" class="img-fluid"></a>
                                    </div>
                                    <nav class="main-menu">
                                        <ul>
                                            <li style="font-family:Lato sans-serif">
                                                <a href="{{route('home')}}">Trang chủ</a>
                                            </li>
                                            <li style="font-family:Lato sans-serif">
                                                <a href="{{route('product')}}">Sản phẩm</i></a>
                                            </li>
                                            <li style="font-family:Lato sans-serif">
                                                <a href="{{route('show')}}">Giỏ hàng</i></a>
                                            </li>
                                            <li style="font-family:Lato sans-serif">
                                                <a href="{{route('checkout')}}">Thanh toán</i></a>
                                            </li>
                                            
                                            <li style="font-family:Lato sans-serif">
                                                @if(Auth::check())
                                                <a href="#">{{Auth::user()->name}} <i class="fa fa-angle-down"></i></a>
                                                <ul class="dropdown dropdown-width">
                                                    <li style="font-family:Lato sans-serif"><a href="{{route('logout')}}">Đăng xuất</a></li>
                                                </ul>
                                                @else
                                                <a href="#">Tài khoản <i class="fa fa-angle-down"></i></a>
                                                <ul class="dropdown dropdown-width">
                                                    <li style="font-family:Lato sans-serif"><a href="{{route('login')}}">Đăng nhập</a></li>
                                                    <li style="font-family:Lato sans-serif"><a href="{{route('register')}}">Đăng ký</a></li>
                                                </ul>
                                                @endif
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- Main Menu End -->
                            <div class="blockcart" style="width:180px" > 
                                <a href="#" class="drop-toggle" style="width:100%">
                                    <img src="{{url('frontend')}}/assets/images/cart/cart.png" alt="" class="img-fluid">
                                    <span class="my-cart" style="font-family:Lato sans-serif">Giỏ hàng của tôi</span>
                                    <span class="count">{{$cart->total_quantity}}</span>
                                    <span class="total-item" style="font-family:Lato sans-serif">{{number_format($cart->total_price)}} VNĐ</span>
                                </a>
                                <div class="cart-dropdown drop-dropdown">
                                    <ul>
                                        @if($cart->items == [])
                                            <li class="mini-cart-details"></li>
                                        @else
                                        @foreach($cart->items as $value)
                                            <li class="mini-cart-details">
                                                <div class="innr-crt-img">
                                                    <img src="{{url('uploads')}}/images/{{$value['image']}}" alt="" style="width:70px;height:70px">
                                                    <span>{{$value['quantity']}}x</span>
                                                </div>
                                                <div class="innr-crt-content">
                                                    <span class="product-name" >
                                                    <a href="#">{{$value['name']}}</a>
                                                </span>
                                                    <span class="product-price" style="font-family:Lato sans-serif">{{number_format($value['price'])}} VNĐ</span>
                                                    <span class="product-price" style="font-family:Lato sans-serif">Tổng:{{number_format($value['quantity']*$value['price'])}} VNĐ</span>
                                                </div>
                                            </li>
                                        @endforeach
                                        @endif
                                        <li>
                                            <span class="subtotal-text" style="font-family:Lato sans-serif">Tổng các sản phẩm</span>
                                            <span class="subtotal-price" style="font-family:Lato sans-serif">{{number_format($cart->total_price)}} VNĐ</span>
                                        </li>
                                    </ul>
                                    <div class="checkout-cart" style="font-family:Lato sans-serif">
                                        <a href="{{route('checkout')}}">Thanh toán</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Middle End -->
        <!-- Header Bottom Start -->
        
        <!-- Header Bottom End  -->
    </div>
    <!-- =================
    Header Area  End 
    =====================-->
    @yield('master')
    <!--===================
     footer area start 
    ===================-->
    <footer class="mt-30">
        <!-- Newslatter area start -->
        <div class="newsletter-group">
            
        </div>
        <!-- Newslatter area End -->
        <!-- Footer Top Start -->
        <!-- Footer Top End -->
        <!-- Footer Bottom Start -->
        <!-- Footer Bottom End -->
    </footer>
    <!--===================
     footer area end 
    ===================-->

    <!-- Scroll To Top Start -->
    <a class="scroll-to-top" href="#"><i class="fa fa-angle-up"></i></a>
    <!-- Scroll To Top End -->

    

    <!-- JS
============================================ -->

    <!-- jQuery JS -->
    <script src="{{url('frontend')}}/assets/js/vendor/jquery-3.4.1.min.js"></script>
    <!-- jQuery Migrate JS -->
    <script src="{{url('frontend')}}/assets/js/vendor/jquery-migrate-3.1.0.min.js"></script>
    <!-- Modernizer JS -->
    <script src="{{url('frontend')}}/assets/js/vendor/modernizr-3.8.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="{{url('frontend')}}/assets/js/vendor/bootstrap.min.js"></script>
    <!-- Plugins JS -->
    <script src="{{url('frontend')}}/assets/js/plugins/plugins.js"></script>
    <!-- Jquery ui JS -->
    <script src="{{url('frontend')}}/assets/js/plugins/jquery.ui.js"></script>
    <!-- Mailchimp JS -->
    <script src="{{url('frontend')}}/assets/js/plugins/jquery.ajaxchimp.min.js"></script>
    <!-- Jquery Magnific Popup JS -->
    <script src="{{url('frontend')}}/assets/js/plugins/jquery.magnific-popup.min.js"></script>
    <!-- Slick JS -->
    <script src="{{url('frontend')}}/assets/js/plugins/slick.min.js"></script>
    <!-- Modal JS -->
    <script src="{{url('frontend')}}/assets/js/plugins/modal.min.js"></script>
    <!-- Sticky Sidebar JS -->
    <script src="{{url('frontend')}}/assets/js/plugins/sticky-sidebar.min.js"></script>
    <!-- Countdown JS -->
    <script src="{{url('frontend')}}/assets/js/plugins/countdown.min.js"></script>
    <!-- jQuery Nice Select JS -->
    <script src="{{url('frontend')}}/assets/js/plugins/jquery.nice-select.min.js"></script>

    <!-- Main JS -->
    <script src="{{url('frontend')}}/assets/js/main.js"></script>
    <script>
        $('.search-ajax-result').hide();
        $('.input-search-ajax').keyup(function() {
            var _text = $(this).val();
            var _url = "{{url('public/uploads')}}"
            if(_text != '') {
                $.ajax({
                    url:"{{route('ajax-search-product')}}?key=" + _text,
                    type:'GET',
                    success:function(res){
                        $('.search-ajax-result').show(500);
                        $('.search-ajax-result').html(res)
                    }
                
            });
            }else{
                $('.search-ajax-result').html('');
                $('.search-ajax-result').hide();
            }
        });
    </script>
</body>


<!-- Mirrored from htmldemo.hasthemes.com/circleshop/circleshop/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 30 May 2021 03:44:25 GMT -->
</html>