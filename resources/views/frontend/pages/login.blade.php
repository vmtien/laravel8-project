@extends('frontend.main')
    @section('master')
        
        <div class="login-area mt-25">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-3 col-lg-6" >
                            @if(Session::get('success'))
                                <div class="alert alert-success text-center" style="font-family:Lato sans-serif">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <strong>{{Session::get('success')}}</strong>
                                </div>
                            @endif
                            @if(Session::get('error'))
                                <div class="alert alert-danger text-center" style="font-family:Lato sans-serif">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <strong>{{Session::get('error')}}</strong>
                                </div>
                            @endif
                        <div class="checkout_info mb-20">
                            
                            <form class="form-row" action="{{route('postLogin')}}" method="post" style="font-family:Lato sans-serif">
                                @csrf
                                <input type="hidden" value="{{$url_previous}}" name="action">
                                <h1 class="last-title mb-30 text-center">Đăng nhập</h1>
                                <div class="form_group col-12">
                                    <label class="form-label">Tên tài khoản (Địa chỉ email) <span>*</span></label>
                                    <input class="input-form" type="text" name="email">
                                </div>
                                <div class="form_group col-12 position-relative">
                                    <label class="form-label">Mật khẩu <span>*</span></label>
                                    <input class="input-form input-login" type="password" name="password">
                                </div>
                                <div class="form_group group_3 col-lg-3">
                                    <button class="login-register" type="submit">Đăng nhập</button>
                                </div>
                                <div class="form_group group_3 col-lg-9">
                                </div>
                                <div class="col-lg-12 text-left">
                                    <a class="lost-password" href="#">Quên mật khẩu?</a>
                                </div>
                                <div class="col-lg-12 text-left">
                                    <p class="register-page"> Bạn chưa có tài khoản? <a href="{{route('register')}}">Đăng ký tại đây</a>.</p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection