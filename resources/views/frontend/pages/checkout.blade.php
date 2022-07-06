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
                                <li style="font-family:Lato sans-serif">Thanh toán</li>
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
        Checkout area Start
        ==========================-->
        <div class="checkout-area mt-50">
            <div class="container">
                @if(!Auth::check())
                <div class="row">
                    <div class="col-12">
                        <div class="user-actions">
                            <h5 style="font-family:Lato sans-serif">
                                <i class="fa fa-file-o"></i>
                                Vui lòng đăng nhập để thanh toán.
                                <a href="{{route('login')}}">Đăng nhập tại đây</a>
                            </h5>
                        </div>
                    </div>
                </div>
                @else
                <form action="" method="post">
                @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-row">
                                <div class="col-lg-12">
                                    <h5 class="form-head" style="font-family:Lato sans-serif">Thông tin khách hàng</h5>
                                </div>
                                <div class="form_group col-12 col-md-6">
                                    <label class="form-label" style="font-family:Lato sans-serif">Tên người nhận<span>*</span></label>
                                    <input class="input-form" type="text" name="name" value="{{Auth::user()->name}}">
                                    @error('name')
                                        <span style="color:red">{{$message}}</span>
                                    @enderror
                                </div>
                                
                                <div class="form_group col-12 col-md-6">
                                    <label class="form-label" style="font-family:Lato sans-serif">Email<span>*</span></label>
                                    <input class="input-form" type="text" name="email" value="{{Auth::user()->email}}" readonly>
                                    @error('email')
                                        <span style="color:red">{{$message}}</span>
                                    @enderror
                                </div>
                                
                                <div class="form_group col-12">
                                    <label class="form-label" style="font-family:Lato sans-serif">Địa chỉ<span>*</span></label>
                                    <input class="input-form" type="text" name="address" value="{{Auth::user()->address}}">
                                    @error('address')
                                        <span style="color:red">{{$message}}</span>
                                    @enderror
                                </div>
                                
                                <div class="form_group col-12">
                                    <label class="form-label" style="font-family:Lato sans-serif">Số điện thoại <span>*</span></label>
                                    <input placeholder="Nhập số điện thoại" class="input-form" type="text" name="phone" value="{{Auth::user()->phone}}">
                                    @error('phone')
                                        <span style="color:red">{{$message}}</span>
                                    @enderror
                                </div>
                                
                                <div class="form_group col-12">
                                    <label for="comment" style="font-family:Lato sans-serif">Ghi chú</label>
                                    <textarea class="form-control" rows="5" id="comment" name="note"></textarea>
                                    @error('note')
                                        <span style="color:red">{{$message}}</span>
                                    @enderror
                                </div>
                                
                            </div>
                            <div class="form-row">
                                <div class="form-group col-12 col-md-12">
                                    <div class="form-check">
                                        <div class="custom-checkbox" data-toggle="collapse" data-target="#checkout-logs" role="checkbox" aria-checked="false">
                                            <input class="form-check-input" type="checkbox" id="ship-address" name="check1" value="1">
                                            <span class="checkmark"></span>
                                            <label class="form-check-label" for="ship-address" name="check" >Gửi tới địa chỉ khác</label>
                                        </div>
                                    </div>
                                    <div class="ship-box-info collapse" id="checkout-logs">
                                        <form class="form-row">
                                            <div class="form_group col-12 col-md-12">
                                                <label class="form-label" style="font-family:Lato sans-serif">Tên người nhận <span>*</span></label>
                                                <input class="input-form" type="text" name="nameCheck" value="{{old('nameCheck')}}">
                                                @error('nameCheck')
                                                    <span style="color:red">{{$message}}</span>
                                                @enderror
                                            </div>
                                            
                                            <div class="form_group col-12 col-md-12">
                                                <label class="form-label" style="font-family:Lato sans-serif">Địa chỉ <span>*</span></label>
                                                <input class="input-form" type="text" name="addressCheck" value="{{old('addressCheck')}}">
                                                @error('addressCheck')
                                                    <span style="color:red">{{$message}}</span>
                                                @enderror
                                            </div>
                                            
                                            <div class="form_group col-12 col-md-12">
                                                <label class="form-label" style="font-family:Lato sans-serif">Số điện thoại <span>*</span></label>
                                                <input class="input-form" type="text" name="phoneCheck" value="{{old('phoneCheck')}}">
                                                @error('phoneCheck')
                                                    <span style="color:red">{{$message}}</span>
                                                @enderror
                                            </div>
                                            
                                            <div class="form_group col-12">
                                                <label for="comment" style="font-family:Lato sans-serif">Ghi chú</label>
                                                <textarea class="form-control" rows="5" id="comment" name="noteCheck" value="{{old('noteCheck')}}"></textarea>
                                                @error('noteCheck')
                                                    <span style="color:red">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-row">
                                <div class="col-lg-12">
                                    <h5 class="form-head rs-padding" style="font-family:Lato sans-serif">Chi tiết đơn hàng</h5>
                                </div>
                                <div class="col-lg-12">
                                    <div class="order_table table-responsive">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th style="font-family:Lato sans-serif">Sản phẩm</th>
                                                    <th style="font-family:Lato sans-serif">Giá tiền</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($cart->items as $value)
                                                <tr>
                                                    <td style="font-family:Lato sans-serif"> {{$value['name']}} <strong> × {{$value['quantity']}}</strong></td>
                                                    <td style="font-family:Lato sans-serif"> {{number_format($value['price']*$value['quantity'])}} VNĐ</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th style="font-family:Lato sans-serif">Tổng tiền</th>
                                                    <td style="font-family:Lato sans-serif">{{number_format($cart->total_price)}} VNĐ
                                                        <input type="text" name="total_amount" value="{{$cart->total_price}}" hidden>
                                                    </td>
                                                </tr>
                                                @error('total_amount')
                                                    <tr>
                                                        <td></td>
                                                        <td style="font-family:Lato sans-serif"><span style="color:red" >{{$message}}</span></td>
                                                    </tr>
                                                @enderror
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row justify-content-end mt-20 mb-20">
                                <input type="submit" class="btn-secondary" style="font-family:Lato sans-serif" value="Tiếp tục thanh toán">
                            </div>
                        </div>
                    </div>
                </form>
                @endif
            </div>
        </div>
        <!--======================
        Checkout area End
        ==========================-->
    @endsection