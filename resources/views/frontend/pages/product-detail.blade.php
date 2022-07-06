@extends('frontend.main')
    @section('master')
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
                                <li>
                                    <h1 style="font-family:Lato sans-serif"><a href="{{route('product')}}">Sản phẩm</a></h1>
                                </li>
                                <li style="font-family:Lato sans-serif">Chi tiết sản phẩm</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=====================
        Breadcrumb Aera End
        =========================-->

        <!-- ========================
        Product Details Area Start 
        ===========================-->
        <div class="product-area product-details-section">
            <div class="container">
                <form action="{{route('add-cart',$pro->id)}}" method="get">
                    @csrf
                    <div class="row">
                            <div class="col-lg-5 col-12 mt-50">
                                <!-- Product Zoom Image start -->
                                <div class="product-slider-container arrow-center text-center">
                                    <div class="product-item">
                                        <a href="{{url('uploads')}}/images/{{$pro->image}}"><img src="{{url('uploads')}}/images/{{$pro->image}}" class="img-fluid" alt="" /></a>
                                    </div>
                                    @foreach($imgDetail as $value)
                                            <div class="product-item">
                                                <a href="{{url('uploads')}}/Imgproduct/{{$value->image}}"><img src="{{url('uploads')}}/Imgproduct/{{$value->image}}" class="img-fluid" alt="" /></a>
                                            </div>
                                    @endforeach
                                </div>
                                <!-- Product Zoom Image End -->
                                <!-- Product Thumb Zoom Image Start -->
                                <div class="product-details-thumbnail arrow-center text-center">
                                    <div class="product-item-thumb">
                                        <img src="{{url('uploads')}}/images/{{$pro->image}}" class="img-fluid" alt="" />
                                    </div>
                                    @foreach($imgDetail as $value)
                                            <div class="product-item-thumb">
                                                <img src="{{url('uploads')}}/Imgproduct/{{$value->image}}" class="img-fluid" alt="" /></a>
                                            </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-7 col-12 mt-45">
                                <!-- Product Summery Start -->
                                <div class="product-summery position-relative">
                                    <div class="product-head">
                                        <h1 class="product-title">{{$pro->name}}</h1>
                                    </div>
                                    <div class="price-box">
                                        @if($pro->sale_price > 0)
                                            <span class="old-price" style="font-family:Lato sans-serif"><del>{{number_format($pro->price)}} VNĐ</del></span>
                                            <span class="regular-price" style="font-family:Lato sans-serif">{{number_format($pro->sale_price)}} VNĐ</span>
                                        @else
                                            <span class="regular-price" style="font-family:Lato sans-serif">{{number_format($pro->price)}} VNĐ</span>
                                        @endif
                                    </div>
                                    <div class="product-description">
                                                @if($pro->description != null)
                                                    <div style="font-family:Lato sans-serif"><b>Mô tả:</b>{{$des}}</div>
                                                @endif
                                                <ul>
                                                    @foreach($category as $va)
                                                        @if($pro->category_id == $va->id)
                                                            <li><span style="font-family:Lato sans-serif"><strong>Thể loại :</strong>{{$va->name}}</span></li>
                                                        @endif
                                                    @endforeach
                                                    @foreach($brand as $va)
                                                        @if($pro->brand_id == $va->id)
                                                            <li><span style="font-family:Lato sans-serif"><strong>Hãng :</strong>{{$va->name}}</span></li>
                                                        @endif
                                                    @endforeach
                                                    @foreach($proDetail as $v)
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
                                                    @endforeach
                                                </ul>
                                    </div>
                                    <div class="product-packeges">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="label"><span style="font-family:Lato sans-serif">Số lượng</span></td>
                                                    <td class="value">
                                                        <div class="product-quantity">
                                                            <span class="qty-btn minus"><i class="fa fa-angle-down"></i></span>
                                                            <input type="text" class="input-qty" value="1" name="quantity">
                                                            <span class="qty-btn plus"><i class="fa fa-angle-up"></i></span>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="product-buttons grid_list">
                                        <div class="action-link">
                                            <a class="compare-add same-link" href="compare.html" title="Thêm vào so sánh"><i class="zmdi zmdi-refresh-alt"></i></a>
                                            <button class="btn-secondary" style="font-family:Lato sans-serif">Thêm vào giỏ hàng</button>
                                            <a class="wishlist-add same-link" href="wishlist.html" title="Thêm vào danh sách mong muốn"><i class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-meta">
                                        <div class="desc-content">
                                            <div class="social_sharing d-flex" >
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
                </form>
            </div>
        </div>
        <!-- ========================
        Product Details Area End 
        ===========================-->
    @endsection