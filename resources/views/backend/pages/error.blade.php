@extends('backend.layouts.master')
    @section('main')
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('admin')}}">Trang chủ</a></li>
                    <li class="breadcrumb-item active">404 Lỗi trang</li>
                    </ol>
                </div>
                </div>
            </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
            <div class="error-page">
                <h2 class="headline text-warning"> 404</h2>

                <div class="error-content">
                <h3><i class="fas fa-exclamation-triangle text-warning"></i> Lỗi! Không tìm thấy trang.</h3>

                <p>
                    Chúng tôi không thể tìm thấy trang bạn đang tìm kiếm.
                    Trong khi đó, bạn có thể <a href="{{route('admin')}}">Trở về trang chủ</a> 
                </p>
                </div>
                <!-- /.error-content -->
            </div>
            <!-- /.error-page -->
            </section>
            <!-- /.content -->
        </div>
    @endsection