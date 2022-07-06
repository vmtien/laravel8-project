@extends('frontend.main')
    @section('master')
        <div class="breadcrumbs_area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb_content">
                            <ul>
                                <li>
                                    <h1><a href="{{route('home')}}" style="font-family:Lato sans-serif">Trang chủ</a></h1>
                                </li>
                                <li>404</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="error_page_start">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 style="font-family:Lato sans-serif">Lỗi! Không tìm thấy trang</h2>
                        <p style="font-family:Lato sans-serif">Xin lỗi nhưng trang bạn đang tìm không tồn tại, đã bị xóa, đổi tên hoặc tạm thời không có.</p>
                        <div class="hom_btn">
                            <a href="{{route('home')}}" class="btn-secondary" style="font-family:Lato sans-serif">Trở về trang chủ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection