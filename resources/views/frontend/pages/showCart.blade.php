@extends('frontend.main')
    @section('master')
        <div class="cart-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="{{route('cartUpdate')}}" class="cart-form" method="POST">
                            @csrf
                            <!-- Cart Title Start -->
                            <div class="cart-title">
                                <h5 class="last-title mt-50 mb-20" style="font-family:Lato sans-serif">Giỏ hàng</h5>
                            </div>
                            <!-- Cart Title End -->
                            <!-- Cart Table Area Start -->
                                <div class="table-desc">
                                    <div class="cart-page table-responsive">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th class="product-image" style="font-family:Lato sans-serif">Ảnh</th>
                                                    <th class="product-name" style="font-family:Lato sans-serif">Sản phẩm</th>
                                                    <th class="product-price" style="font-family:Lato sans-serif">Giá</th>
                                                    <th class="product-quantity" style="font-family:Lato sans-serif">Số lượng</th>
                                                    <th class="product-total" style="font-family:Lato sans-serif">Tổng tiền</th>
                                                    <th class="product-remove" style="font-family:Lato sans-serif">Xóa</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($cart->items as $value)
                                                <tr>
                                                    
                                                    <td class="product-image" style="width:120px;height:122px"><a href="#"><img src="{{url('uploads')}}/images/{{$value['image']}}" alt="" class="img-fluid"></a></td>
                                                    <td class="product-name">{{$value['name']}}</td>
                                                    <td class="product-price">{{number_format($value['price'])}}</td>
                                                    <td class="product-quantity"><label></label> <input min="1" max="100" value="{{$value['quantity']}}" type="number" name="quantity[{{$value['id']}}]"></td>
                                                    <td class="product-total">{{number_format($value['quantity']*$value['price'])}}VNĐ</td>
                                                    <td class="product-remove"><a href="{{route('cartDelete',$value['id'])}}"><i class="fa fa-trash-o"></i></a></td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="cart-submit">
                                        <nav class="main-menu">
                                        <ul >
                                            <li>
                                                <button style="font-family:Lato sans-serif"><a href="{{route('product')}}">Mua thêm sản phẩm</a></button>
                                            </li>
                                            <li><button type="submit"style="font-family:Lato sans-serif">Cập nhật giỏ hàng</button></li>
                                        </ul>
                                        </nav>
                                    </div>
                                </div>
                            <!-- Cart Table Area End -->
                            <!-- Coupon Area Start -->
                            <div class="coupon-area">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="coupon-code right">
                                            <h3 style="font-family:Lato sans-serif">Tổng giỏ hàng</h3>
                                            <div class="coupon-inner">
                                                <div class="cart-subtotal" style="font-family:Lato sans-serif">
                                                    <p>Tổng</p>
                                                    <p class="cart-amount">{{number_format($cart->total_price)}} VNĐ</p>
                                                </div>
                                                <div class="checkout-btn" style="font-family:Lato sans-serif">
                                                    <a href="{{route('checkout')}}">Thanh toán</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Coupon Area End -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection