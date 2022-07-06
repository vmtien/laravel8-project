@extends('backend.layouts.master')
    @section('main')
    @if(Session::get('success'))
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>{{Session::get('success')}}</strong>
     </div>
      @endif
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-8"><h3 class="card-title"><b>Chi tiết đơn hàng</b></h3></div>
                <div class="col-md-4 text-right"><b>Ngày đặt:</b>{{$order->created_at->format('m-d-Y')}}</div>
            </div> 
        </div>
        <div class="card-body">
            <div><p><b>Họ tên người nhận:</b>{{$order->name}}</p></div>
            <div><p><b>Số điện thoại:</b>{{$order->phone}}</p></div>
            <div><p><b>Địa chỉ nhận hàng:</b>{{$order->address}}</p></div>
            <div><p><b>Email:</b>{{$order->email}}</p></div>
            <div><p><b>Thông tin thêm:</b>{{($order->note != null)? $order->note : 'Không có'}}</p></div>
            <div><p><b>Trạng thái:</b>
                @if($order->status == 0)
                  <span class="btn btn-success">Chờ xử lý</span>
                @elseif($order->status == 1)
                <span class="btn btn-warning">Đã xử lý</span>
                @elseif($order->status == 2)
                <span class="btn btn-info">Đang giao hàng</span>
                @elseif($order->status == 3)
                <span class="btn btn-secondary">Đã giao hàng</span>
                @elseif($order->status == 4)
                <span class="btn btn-danger">Đã hủy</span>
                @endif
            </p></div>
            <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th class="text-center" style="width: 100px">STT</th>
                      <th class="text-center" style="width: 100px">Hình ảnh</th>
                      <th class="text-center">Tên sản phẩm</th>
                      <th class="text-center">Số lượng</th>
                      <th class="text-center">Đơn giá</th>
                      <th class="text-center">Thành tiền</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                        @foreach($products as $value)
                            <tr>
                              <td class="text-center align-middle">{{$stt=$stt+1}}</td>
                              <td style="padding:0px" ><img src="{{url('uploads')}}/images/{{$value->image}}" alt="" style="width: 100%"></td>
                              <td class="text-left align-middle">{{$value->name}}</td>
                                @foreach($oddts as $v)
                                  @if($v->product_id == $value->id)
                                    <td class="align-middle text-center">{{$v->quantity}}</td>
                                    <td class="align-middle text-center">{{number_format($v->price)}} VNĐ</td>
                                    <td class="align-middle text-right">{{number_format($v->quantity*$v->price)}} VNĐ</td>
                                  @endif
                                @endforeach
                            </tr>
                        @endforeach
                  </tbody>
                  <tfoot class="table-borderless">
                      <tr>
                        <td><b>Tổng tiền:</b></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class= "text-right"><b>{{number_format($order->total_amount)}} VNĐ</b></td>
                      </tr>
                  </tfoot>
            </table>
            <form action="{{route('postStt',$order->id)}}" method="post">
              @csrf
                <div class="form-group card-footer" style="width:30%">
                  <div class="row">
                    <label for="">Trạng thái đơn hàng</label>
                  </div>
                  <div class="row">
                    <div class="col-md-8">
                  <select class="form-control" name="status" id="">
                    <option value = "{{$order->status}}">
                      @if($order->status == 0)
                        <p>Chờ xử lý</p>
                      @elseif($order->status == 1)
                        <p>Đã xử lý</p>
                      @elseif($order->status == 2)
                        <p>Đang giao hàng</p>
                      @elseif($order->status == 3)
                        <p>Đã giao hàng</p>
                      @elseif($order->status == 4)
                        <p>Đã hủy</p>
                      @endif
                    </option>
                    @if($order->status != 0)
                    <option value="0">Chờ xử lý</option>
                    @endif
                    @if($order->status != 1)
                    <option value="1">Đã xử lý</option>
                    @endif
                    @if($order->status != 2)
                    <option value="2">Đang giao hàng</option>
                    @endif
                    @if($order->status != 3)
                    <option value="3">Đã giao hàng</option>
                    @endif
                    @if($order->status != 4)
                    <option value="4">Đã hủy</option>
                    @endif
                  </select>
                    </div>
                    <div class="col-md-4">
                      <button type="submit" class ="btn btn-primary">Thay đổi</button>
                    </div>
                  </div>
                </div>
            </form>
        </div>
    </div>
    @endsection