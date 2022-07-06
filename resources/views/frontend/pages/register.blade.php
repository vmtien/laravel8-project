@extends('frontend.main')
    @section('master')
        <div class="register-area login-area mt-25">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-3 col-lg-6">
                        <div class="checkout_info mb-20">
                            <form class="form-row" action="{{route('postRegister')}}" method="post" style="font-family:Lato sans-serif">
                                @csrf
                                <h5 class="last-title mb-10 text-center">Đăng ký tài khoản</h5>
                                <div class="col-lg-12 text-left mb-20">
                                    <p class="register-page"> Bạn đã có tài khoản? <a href="{{route('login')}}">Đăng nhập tại đây</a></p>
                                </div>
                                <div class="form_group col-12">
                                    <label class="form-label">Tên <span>*</span></label>
                                    <input class="input-form" type="text" name="name" value="{{old('name')}}">
                                    @error('name')
                                  <span style="color:red">{{$message}}</span>
                                @enderror
                                </div>
                                <div class="form_group col-12">
                                    <label class="form-label">Địa chỉ <span>*</span></label>
                                    <input class="input-form" type="text" name="address" value="{{old('address')}}">
                                    @error('address')
                                  <span style="color:red">{{$message}}</span>
                                @enderror
                                </div>
                                <div class="form_group col-12">
                                    <label class="form-label">Số điện thoại <span>*</span></label>
                                    <input class="input-form" type="text" name="phone" value="{{old('phone')}}">
                                    @error('phone')
                                  <span style="color:red">{{$message}}</span>
                                @enderror
                                </div>
                                <div class="form_group col-12">
                                    <label class="form-label">Tên tài khoản (Địa chỉ email) <span>*</span></label>
                                    <input class="input-form" type="text" name="email" value="{{old('email')}}">
                                    @error('email')
                                  <span style="color:red">{{$message}}</span>
                                @enderror
                                </div>
                                <div class="form_group col-12">
                                    <label class="form-label">Mật khẩu <span>*</span></label>
                                    <input class="input-form " type="password" name="password" value="{{old('password')}}">
                                    @error('password')
                                  <span style="color:red">{{$message}}</span>
                                @enderror
                                </div>
                                <div class="form_group col-12">
                                    <label class="form-label">Nhập lại mật khẩu <span>*</span></label>
                                    <input class="input-form " type="password" name="password_confirmation" value="{{old('password_confirmation')}}">
                                    @error('password_confirmation')
                                  <span style="color:red">{{$message}}</span>
                                @enderror
                                </div>
                                <div class="form-row mt-20">
                                    <input type="submit" class="btn-secondary" value="Đăng ký">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection