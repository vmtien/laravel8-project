@extends('frontend.main')
    @section('master')
        <div class="header-area header-three">
        <div class="header-menu header-bottom-area theme-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <!-- Category Menu Start -->
                        <div class="categoryes-menu-bar">
                            <div class="categoryes-menu-btn category-toggle">
                                <div class="float-left">
                                    <a href="#">Laptop</a>
                                </div>
                                <div class="float-right">
                                    <i class="fa fa-bars"></i>
                                </div>
                            </div>
                            <nav class="categorye-menus category-dropdown">
                                <ul class="categories-expand">
                                    @foreach($category as $val)
                                        <li style="font-family:Lato sans-serif">
                                            <a href="{{route('proCate',$val->id)}}">{{$val->name}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </nav>
                        </div>
                        <!-- Category Menu End -->
                    </div>
                    <div class="col-lg-9">
                        <div class="search-container">
                            <form action="" class="form-search">
                                <div class="search_box " style="font-family:Lato sans-serif">
                                    <input class="header-search form-control input-search-ajax" placeholder="Nhập tên sản phẩm tìm kiếm" type="text" name="key">
                                    <div class="search-ajax-result">
                                        
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!--=====================
    Breadcrumb Aera Start
    =========================-->
        <div class="breadcrumbs_area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb_content">
                            <ul>
                                <li>
                                    <h1 style="font-family:Lato sans-serif"><a href="{{route('home')}}">Trang chủ</a></h1>
                                </li>
                                <li style="font-family:Lato sans-serif">Sản phẩm</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=====================
        Breadcrumb Aera End
        =========================-->

        <!--======================
        Shop area Start
        ==========================-->
        <div class="shop-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <aside class="sidebar-widget mt-50">
                            <div class="shop-sidebar-category">
                                <div class="sidebar-title">
                                    <h4 class="title-shop" style="font-family:Lato sans-serif">Thể loại</h4>
                                </div>
                                <ul class="sidebar-category-expand">
                                    @foreach($category as $value)
                                    <li class="menu-item-has-children" style="font-family:Lato sans-serif">
                                        <a href="{{route('proCate',$value->id)}}">{{$value->name}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="shop-sidebar-category">
                                <div class="sidebar-title">
                                    <h4 class="title-shop" style="font-family:Lato sans-serif">Hãng</h4>
                                </div>
                                <ul class="sidebar-category-expand">
                                    @foreach($brand as $value)
                                    <li class="menu-item-has-children" style="font-family:Lato sans-serif">
                                        <a href="{{route('proBra',$value->id)}}">{{$value->name}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <!-- Shop Banner Start -->
                            <div class="single-banner text-center mt-50 mb-30">
                                <a href="#"><img src="assets/images/banner/shop-banner-2.jpg" alt="" class="img-fluid"></a>
                            </div>
                            <!-- Shop Banner End -->
                        </aside>
                    </div>
                    <div class="col-lg-9 order-first order-lg-last">
                        <!-- Shop Banner Start -->
                        <div class="single-banner mt-50 mb-50">
                            <a href="#"><img src="assets/images/banner/shop-banner-1.jpg" alt="" class="img-fluid"></a>
                        </div>
                        <!-- Shop Banner End -->
                        <!-- Shop Toolbar Start -->
                        <div class="toolbar-shop mb-50">
                            <div class="shop_toolbar_btn">
                                <button data-role="grid_3" class="btn-grid-3 active"></button>
                                <button data-role="grid_list" class="btn-list"></button>
                            </div>
                            <div class="page-amount">
                                <p style="font-family:Lato sans-serif">Danh sách {{$totalPro}} sản phẩm</p>
                            </div>
                            <div></div>
                        </div>
                        <!-- Shop Toolbar End -->
                        <!-- Shop Wrapper Start -->
                        <div class="row shop-wrapper grid_3">
                            @foreach($pro as $val)
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-20">
                                <!-- Single-Product-Start -->
                                <div class="item-product">
                                    <div class="product-thumb">
                                        <a href="{{route('detail',$val->id)}}">
                                            <img src="{{url('uploads')}}/images/{{$val->image}}" alt="" class="img-fluid">
                                        </a>
                                        <div class="box-label">
                                                            @if(date_diff($val->created_at , $time)->days <= 14)
                                                                <div class="label-product-new" style="font-family:Lato sans-serif">
                                                                    <span>Mới</span>
                                                                </div>
                                                            @endif
                                                            @if($val->sale_price > 0)
                                                            <div class="label-product-discount">
                                                                <span>-{{round(($val->price - $val->sale_price)/$val->price*100)}}%</span>
                                                            </div>
                                                            @endif
                                        </div>
                                        <div class="action-link">
                                            <a class="quick-view same-link" href="" title="Xem nhanh" data-toggle="modal" data-target="#{{$val->id}}" data-original-title="xem nhanh"><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                            <a class="compare-add same-link" href="compare.html" title="Thêm vào so sánh"><i class="zmdi zmdi-refresh-alt"></i></a>
                                            <a class="wishlist-add same-link" href="wishlist.html" title="Thêm vào danh sách mong muốn"><i class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-name">
                                            <a href="{{route('detail',$val->id)}}">{{$val->name}}</a>
                                        </div>
                                        <div class="price-box" style="font-family:Lato sans-serif">
                                            @if($val->sale_price >0)
                                            <span class="regular-price">{{number_format($val->sale_price)}} VNĐ</span>
                                            <span class="old-price"><del>{{number_format($val->price)}} VNĐ</del></span>
                                            @else
                                            <span class="regular-price">{{number_format($val->price)}} VNĐ</span>
                                            @endif
                                        </div>
                                        <div class="cart">
                                            <div class="add-to-cart" style="font-family:Lato sans-serif">
                                                <a href="{{route('add-cart',$val->id)}}" title="Thêm vào giỏ hàng"><i class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid-list-caption align-items-center">
                                        <div class="product-name">
                                            <a href="{{route('detail',$val->id)}}">{{$val->name}}</a>
                                        </div>
                                        <div class="price-box" style="font-family:Lato sans-serif">
                                            @if($val->sale_price >0)
                                                <span class="regular-price">{{number_format($val->sale_price)}} VNĐ</span>
                                                <span class="old-price"><del>{{number_format($val->price)}} VNĐ</del></span>
                                                @else
                                                <span class="regular-price">{{number_format($val->price)}} VNĐ</span>
                                            @endif
                                        </div>
                                         <div class="text-available" style="font-family:Lato sans-serif">
                                            @foreach($ProDetail as $v)
                                                @if($v->product_id == $val->id)
                                                    <p><strong>CPU:</strong><span> {{$v->CPU}}</span></p>
                                                    <p><strong>RAM:</strong><span> {{$v->RAM}}</span></p>
                                                    @if($v->graphics != null)
                                                    <p><strong>Đồ họa:</strong><span> {{$v->graphics}}</span></p>
                                                    @endif
                                                @endif
                                            @endforeach
                                        </div>
                                        <div class="action-link">
                                            <a class="quick-view same-link" href="{{route('detail',$val->id)}}" title="Xem nhanh" data-toggle="modal" data-target="#{{$val->id}}" data-original-title="quick view"><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                            <a class="compare-add same-link" href="compare.html" title="Thêm vào so sánh"><i class="zmdi zmdi-refresh-alt"></i></a>
                                            <a class="wishlist-add same-link" href="wishlist.html" title="Thêm vào danh sách mong muốn"><i class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                        </div>
                                        <div class="cart-list-button" style="font-family:Lato sans-serif">
                                            <a href="{{route('add-cart',$val->id)}}" class="cart-btn" style="font-family:Lato sans-serif">Thêm vào giỏ hàng</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single-Product-End -->
                            </div>
                            @endforeach
                        </div>
                        <!-- Shop Wrapper End -->
                        <!-- Shop Toolbar Start -->
                        <hr>
                        <div class="pull-right">
                            {{$pro->appends(request()->all())->links()}}
                        </div>
                        <!-- Shop Toolbar End -->
                    </div>
                </div>
            </div>
        </div>
    <!--======================
    Shop area End
    ==========================-->
    <!-- modal area start-->
    @foreach($pro as $val)
    <div class="modal fade" id="{{$val->id}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="zmdi zmdi-close"></i></span>
                </button>
                <div class="modal_body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="modal_tab">
                                    <div class="tab-content product-details-large">
                                        <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="{{url('uploads')}}/images/{{$val->image}}" alt="" class="img-fluid"></a>
                                            </div>
                                        </div>
                                        @foreach($imgProDetail as $v)
                                                @if($v->product_id == $val->id)
                                                    <div class="tab-pane fade" id="tab{{$v->id}}" role="tabpanel">
                                                        <div class="modal_tab_img">
                                                            <a href="#"><img src="{{url('uploads')}}/Imgproduct/{{$v->image}}" alt="" class="img-fluid"></a>
                                                        </div>
                                                    </div>
                                                @endif
                                        @endforeach
                                    </div>
                                    <div class="modal_tab_button">
                                        <ul class="nav product_navactive" role="tablist">
                                            <li width="100px" height="100px">
                                                <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="{{url('uploads')}}/images/{{$val->image}}"  alt="" class="img-fluid"></a>
                                            </li width="100px" height="100px">
                                            @foreach($imgProDetail as $v)
                                                @if($v->product_id == $val->id)
                                                    <li>
                                                        <a class="nav-link" data-toggle="tab" href="#tab{{$v->id}}" role="tab" aria-controls="tab2" aria-selected="false"><img src="{{url('uploads')}}/Imgproduct/{{$v->image}}"  alt="" class="img-fluid"></a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <!-- Product Summery Start -->
                                <div class="product-summery mt-50">
                                    <div class="product-head">
                                        <h1 class="product-title">{{$val->name}}</h1>
                                    </div>
                                    <div class="price-box">
                                        @if($val->sale_price == null)
                                        <span class="regular-price" style="font-family:Lato sans-serif">{{number_format($val->price)}} VNĐ</span>
                                        @else
                                        <span class="old-price" style="font-family:Lato sans-serif"><del>{{number_format($val->price)}} VNĐ</del></span>
                                        <span class="regular-price" style="font-family:Lato sans-serif">{{number_format($val->sale_price)}} VNĐ</span>
                                        @endif
                                    </div>
                                    <div class="product-tax mb-20">
                                        @foreach($ProDetail as $v)
                                            @if($v->product_id == $val->id)
                                                <ul>
                                                    @foreach($category as $va)
                                                        @if($val->category_id == $va->id)
                                                            <li><span style="font-family:Lato sans-serif"><strong>Thể loại :</strong>{{$va->name}}</span></li>
                                                        @endif
                                                    @endforeach
                                                    @foreach($brand as $va)
                                                        @if($val->brand_id == $va->id)
                                                            <li><span style="font-family:Lato sans-serif"><strong>Hãng :</strong>{{$va->name}}</span></li>
                                                        @endif
                                                    @endforeach
                                                    <li><span><strong>CPU :</strong>{{$v->CPU}}</span></li>
                                                    <li><span><strong>RAM :</strong>{{$v->RAM}}</span></li>
                                                    @if($v->screen != null)
                                                    <li><span style="font-family:Lato sans-serif"><strong>Màn hình :</strong>{{$v->screen}}</span></li>
                                                    @endif
                                                    @if($v->graphics != null)
                                                    <li ><span style="font-family:Lato sans-serif"><strong>Đồ họa :</strong>{{$v->graphics}}</span></li>
                                                    @endif
                                                    @if($v->HardDrive != null)
                                                    <li ><span style="font-family:Lato sans-serif"><strong>Ổ cứng :</strong>{{$v->HardDrive}}</span></li>
                                                    @endif
                                                </ul>
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="product-buttons grid_list">
                                        <div class="action-link">
                                            
                                            <form role="form" action="{{route('add-cart',$val->id)}}" method="GET" enctype="multipart/form-data">
                                            <a href="#" title="Thêm vào so sánh"><i class="zmdi zmdi-refresh-alt"></i></a>
                                            <button class="btn-secondary" style="font-family:Lato sans-serif">Thêm vào giỏ hàng</button>
                                            <a href="#" title="Thêm vào danh sách mong muốn"><i class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                            </form>
                                            
                                        </div>
                                    </div>
                                    <div class="product-meta">
                                        <div class="desc-content">
                                            <div class="social_sharing d-flex">
                                                <h5>share this post:</h5>
                                                <ul>
                                                    <li><a href="#" title="facebook"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#" title="twitter"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#" title="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                                    <li><a href="#" title="google+"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="#" title="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Summery End -->
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