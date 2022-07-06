@extends('frontend.main')
    @section('master')
            <!--=====================
        slider area start
        =========================-->
        <div class="slider_section mb-60">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slider_area slider-two slider-three slider-tools row">
                            <!-- Single Slider Start -->
                            @foreach($banner as $val)
                                    <div class="single_slider" style="background-image: url('uploads/Banner/{{$val->image}}'); background-size:35%; background-position: bottom right; background-repeat: no-repeat;">
                                        <div class="slider_content color_two">
                                            <h4>{{$val->name}}</h4>
                                                @foreach($pro as $v)
                                                    @if($val->name == $v->name)
                                                        <div class="pt-des" style="font-family:Lato sans-serif">
                                                            <p><span>-{{$val->sale}}%</span>Với giá <span>{{number_format($v->sale_price)}} VNĐ</span></p>
                                                        </div>
                                                    @endif
                                                @endforeach
                                                <p class="slider-text" style="font-family:Lato sans-serif">{{strip_tags($val->description)}}</p>
                                                <a href="{{$val->link}}">Mua ngay</a>
                                        </div>
                                    </div>
                            @endforeach
                            <!-- Single Slider End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--======================
                slider area End
            ==========================-->   
                <!--=====================
        Home Product Aera Start
        =========================-->
        <div class="home3-product">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 order-lg-1 order-2">
                        <div class="left-side-wrapper">
                            <!-- Left Side Banner Start -->
                            
                            <!-- Left Side Banner End -->
                            <!-- Product List Sidebar Start -->
                            <div class="product-list-slidebar mt-50">
                                <div class="block-title">
                                    <h6 style="font-family:Lato sans-serif">Sản phẩm mới</h6>
                                </div>
                                <div class="feature-carousel slick-custom slick-custom-default list-home3 nav-top">
                                    <div class="product-list-content">
                                        @foreach($proNew1 as $val)
                                            <div class="single-product-list mb-20">
                                                <div class="row">
                                                <div class="product-list-image">
                                                    <a href="product-details.html">
                                                        <img src="{{url('uploads')}}/images/{{$val->image}}" alt="" class="img-fluid">
                                                    </a>
                                                </div>
                                                <div class="product-caption">
                                                    <div class="product-name">
                                                        <a href="{{route('detail',$val->id)}}">{{$val->name}}</a>
                                                    </div>
                                                    <div class="price-box" style="font-family:Lato sans-serif">
                                                        <span class="regular-price">{{ ($val->sale_price != 0) ? number_format($val->sale_price) : number_format($val->price)}} VNĐ</span>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="product-list-content">
                                        @foreach($proNew2 as $v)
                                            <div class="single-product-list mb-20">
                                                <div class="product-list-image">
                                                    <a href="product-details.html">
                                                        <img src="{{url('uploads')}}/images/{{$v->image}}" alt="" class="img-fluid ">
                                                    </a>
                                                </div>
                                                <div class="product-caption">
                                                    <div class="product-name">
                                                        <a href="{{route('detail',$v->id)}}">{{$v->name}}</a>
                                                    </div>
                                                    <div class="price-box" style="font-family:Lato sans-serif">
                                                        <span class="regular-price">{{ ($v->sale_price != 0) ? number_format($v->sale_price) : number_format($v->price)}} VNĐ</span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!-- Product List Sidebar End -->
                        </div>
                    </div>
                    <div class="col-lg-9 order-lg-2 order-1">
                        <!-- Shipping Area Start -->
                        <div class="row mt-50">
                            <div class="col-12">
                                <div class="single-shipping single-shipping-last single-delivery">
                                    <div class="block-wrapper">
                                        <div class="shipping-content" style="font-family:Lato sans-serif">
                                            <h5 class="ship-title" style="font-family:Lato sans-serif">Giao hàng miễn phí</h5>
                                            <p>Miễn phí với mọi đơn hàng</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-shipping single-shipping-last single-delivery">
                                    <div class="block-wrapper2">
                                        <div class="shipping-content" style="font-family:Lato sans-serif">
                                            <h5 class="ship-title" style="font-family:Lato sans-serif">Hỗ trợ 24/7</h5>
                                            <p>Hỗ trợ mọi lúc</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-shipping single-shipping-last single-delivery">
                                    <div class="block-wrapper3">
                                        <div class="shipping-content" style="font-family:Lato sans-serif">
                                            <h5 class="ship-title" style="font-family:Lato sans-serif">Trả lại tiền</h5>
                                            <p>Trả lại khi không nhận được hàng</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Shipping Area End -->
                        <!-- Product Offer Area Start -->
                        <!-- Product Offer Area End -->
                        <!-- Product slide home 2 start -->
                        <div class="product-slide-home2 mb-20 mt-30">
                            <div class="block-title" >
                                <h6 style="font-family:Lato sans-serif">Sản phẩm tốt nhất</h6>
                            </div>
                            <div class="product-carousel-home2 slick-custom slick-custom-default nav-top">
                                @foreach($bestPro as $val)
                                    <div class="product-row">
                                        <!-- Single-Product-Start -->
                                        <div class="item-product">
                                                <div class="product-thumb">
                                                    <a href="product-details.html">
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
                                                        <a class="quick-view same-link" href="#" title="Xem nhanh" data-toggle="modal" data-target="#a{{$val->id}}" data-original-title="quick view"><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                                        <a class="compare-add same-link" href="compare.html" title="Thêm vào so sánh"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                        <a class="wishlist-add same-link" href="wishlist.html" title="Thêm vào danh sách mong muốn"><i class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-caption">
                                                    <div class="product-name">
                                                        <a href="product-details.html">{{$val->name}}</a>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="regular-price" style="font-family:Lato sans-serif">{{ ($val->sale_price != 0 ) ? number_format($val->sale_price) : number_format($val->price) }} VNĐ</span>
                                                    </div>
                                                    <div class="cart">
                                                        <div class="add-to-cart" style="font-family:Lato sans-serif">
                                                            <a class="cart-plus" href="shopping-cart.html" title="Thêm vào giỏ hàng"><i class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <!-- Single-Product-End -->
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- Product Slide Home 2 End -->
                        <!-- Banner area Start -->
                        <!-- Banner Area End -->
                    </div>
                </div>
            </div>
        </div>
        <!--======================
        Home Product Area End
        ==========================-->
                <!-- =================
        Category Product Area Start 
        =====================-->
        <div class="product-category-area mt-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="nav nav-tabs category-tabs ">
                            @foreach($category as $val)
                                <li class="nav-item" style="width:{{$wid}}%">
                                    @if($val->id == $idMinCate)
                                        <a class="nav-link active" id="{{$val->id}}-tab" data-toggle="tab" href="#{{$val->id}}" style="font-family:Lato sans-serif">
                                            
                                            <span>{{$val->name}}</span>
                                        </a>
                                    @else
                                        <a class="nav-link" id="{{$val->id}}-tab" data-toggle="tab" href="#{{$val->id}}" style="font-family:Lato sans-serif">
                                            
                                            <span>{{$val->name}}</span>
                                        </a>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                        <div class="tab-content">
                            @foreach($category as $val)
                                @if($val->id == $idMinCate)
                                    <div class="product-thing-tab slick-custom-default tab-pane fade show active " id="{{$idMinCate}}">
                                        <!-- Single-Product-Start -->
                                        @foreach($pro as $v)
                                            @if($v->category_id == $idMinCate)
                                                <div class="item-product">
                                                    <div class="product-thumb">
                                                        <a href="{{route('detail',$v->id)}}">
                                                            <img src="{{url('uploads')}}/images/{{$v->image}}" alt="" class="img-fluid">
                                                        </a>
                                                        <div class="box-label">
                                                            @if(date_diff($v->created_at , $time)->days <= 14)
                                                                <div class="label-product-new" style="font-family:Lato sans-serif">
                                                                    <span>Mới</span>
                                                                </div>
                                                            @endif
                                                            @if($v->sale_price > 0)
                                                            <div class="label-product-discount">
                                                                <span>-{{round(($v->price - $v->sale_price)/$v->price*100)}}%</span>
                                                            </div>
                                                            @endif
                                                        </div>
                                                        <div class="action-link">
                                                            <a class="quick-view same-link" href="#" title="Xem nhanh" data-toggle="modal" data-target="#a{{$v->id}}" data-original-title="Xem nhanh"><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                                            <a class="compare-add same-link" href="compare.html" title="Thêm vào so sánh"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            <a class="wishlist-add same-link" href="wishlist.html" title="Thêm vào danh sách mong muốn"><i class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-caption">
                                                        <div class="product-name">
                                                            <a href="{{route('detail',$v->id)}}">{{$v->name}}</a>
                                                        </div>
                                                        <div class="price-box" style="font-family:Lato sans-serif">
                                                            <span class="regular-price">{{ ($v->sale_price != 0) ? number_format($v->sale_price) : number_format($v->price) }} VNĐ </span>
                                                        </div>
                                                        <div class="cart">
                                                            <div class="add-to-cart" style="font-family:Lato sans-serif">
                                                                <a class="cart-plus" href="{{route('add-cart',$val->id)}}" title="Thêm vào giỏ hàng"><i class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                        <!-- Single-Product-End -->
                                    </div>
                                @else
                                    <div class="product-thing-tab slick-custom-default tab-pane fade" id="{{$val->id}}">
                                        <!-- Single-Product-Start -->
                                        @foreach($pro as $v)
                                            @if($v->category_id == $val->id)
                                                <div class="item-product">
                                                    <div class="product-thumb">
                                                        <a href="{{route('detail',$v->id)}}">
                                                            <img src="{{url('uploads')}}/images/{{$v->image}}" alt="" class="img-fluid">
                                                        </a>
                                                        <div class="box-label">
                                                            @if(date_diff($v->created_at , $time)->days <= 14)
                                                                <div class="label-product-new" style="font-family:Lato sans-serif">
                                                                    <span>Mới</span>
                                                                </div>
                                                            @endif
                                                            @if($v->sale_price > 0)
                                                            <div class="label-product-discount">
                                                                <span>-{{round(($v->price - $v->sale_price)/$v->price*100)}}%</span>
                                                            </div>
                                                            @endif
                                                        </div>
                                                        <div class="action-link">
                                                            <a class="quick-view same-link" href="#" title="Xem nhanh" data-toggle="modal" data-target="#a{{$v->id}}" data-original-title="quick view"><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                                            <a class="compare-add same-link" href="compare.html" title="Thêm vào so sánh"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                            <a class="wishlist-add same-link" href="wishlist.html" title="Thêm vào danh sách mong muốn"><i class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-caption">
                                                        <div class="product-name">
                                                            <a href="{{route('detail',$v->id)}}">{{$v->name}}</a>
                                                        </div>
                                                        <div class="price-box" style="font-family:Lato sans-serif">
                                                            <span class="regular-price">{{ ($v->sale_price != 0) ? number_format($v->sale_price) : number_format($v->price) }} VNĐ </span>
                                                        </div>
                                                        <div class="cart">
                                                            <div class="add-to-cart" style="font-family:Lato sans-serif">
                                                                <a class="cart-plus" href="{{route('add-cart',$val->id)}}" title="Thêm vào giỏ hàng"><i class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                        <!-- Single-Product-End -->
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ================
        Product Area End
        =====================-->
                <!-- ================
        Brand Logo Area Start
        =====================-->
        <div class="brand-area mt-45">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center" style="background:black">
                        <div class="brand-logo">
                            @foreach($brand as $val)
                                <div class="single-brand">
                                    <a href="{{route('proBra',$val->id)}}">
                                        <img src="{{url('uploads')}}/Logo/{{$val->logo}}" alt="" class="img-fluid" style="height:110px">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ================
        Brand Logo Area End
        =====================-->
                <!-- ================
        Latest Post Area Start
        =====================-->
        <!-- ================
        Latest Post Area End
        =====================-->
        <!-- modal area start-->
    @foreach($pro as $val)
    <div class="modal fade" id="a{{$val->id}}" tabindex="-1" role="dialog" aria-hidden="true">
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
                                                    @if($v->OperatingSystem != null)
                                                    <li ><span style="font-family:Lato sans-serif"><strong>Hệ điều hành :</strong>{{$v->OperatingSystem}}</span></li>
                                                    @endif
                                                    @if($v->weight != null)
                                                    <li ><span style="font-family:Lato sans-serif"><strong>Trọng lượng(Kg) :</strong>{{$v->weight}}</span></li>
                                                    @endif
                                                    @if($v->size != null)
                                                    <li ><span style="font-family:Lato sans-serif"><strong>Kích thước(mm) :</strong>{{$v->size}}</span></li>
                                                    @endif
                                                    @if($v->origin != null)
                                                    <li ><span style="font-family:Lato sans-serif"><strong>Xuất sứ :</strong>{{$v->origin}}</span></li>
                                                    @endif
                                                    @if($v->DebutYear != null)
                                                    <li ><span style="font-family:Lato sans-serif"><strong>Năm ra mắt :</strong>{{$v->DebutYear}}</span></li>
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
                                            <a href="#" title="Thêm vào danh sách mong muôn"><i class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                            </form>
                                            
                                        </div>
                                    </div>
                                    <div class="product-meta">
                                        <div class="desc-content">
                                            <div class="social_sharing d-flex">
                                                <h5 style="font-family:Lato sans-serif">Chia sẻ bài viết:</h5>
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