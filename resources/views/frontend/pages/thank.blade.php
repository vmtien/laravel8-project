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
                                <li style="font-family:Lato sans-serif">Cảm ơn</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=====================
            Breadcrumb Aera End
        =========================-->

        <!-- ================
        404 Area Start
        =====================-->
        <div class="error_page_start">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 style="font-family:Lato sans-serif">Lời cảm ơn</h2>
                        <p style="font-family:Lato sans-serif">Cảm ơn bạn đã tin tưởng và mua sản phẩm tại cửa hàng</p>
                        <div class="hom_btn" style="font-family:Lato sans-serif">
                            <a href="{{route('home')}}" class="btn-secondary">Tiếp tục mua hàng</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ================
        404 Area End
        =====================-->
    @endsection