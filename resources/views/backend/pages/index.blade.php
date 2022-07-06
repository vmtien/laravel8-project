@extends('backend.layouts.master')
@section('main')
    <div class="content-header">
        <div class="container-fluid">
            <h1 class="text-center">Chào mừng bạn đến với trang quản trị</h1>
        </div>
    </div>
    @if(Session::get('success'))
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>{{Session::get('success')}}</strong>
     </div>
      @endif
    @if($order != "[]")
        <div class="card">
                <div class="card-header border-transparent">
                    <h3 class="card-title">Đơn hàng mới nhất</h3>

                    <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                    </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <div class="table-responsive">
                    <table class="table m-0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Khách hàng</th>
                                <th>Sản phẩm</th>
                                <th>Ngày đặt</th>
                                <th>Địa chỉ nhận hàng</th>
                                <th>Trạng thái</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($order as $val)
                                @if($val->status == 0)
                                    <tr>
                                        <td class="align-middle">{{$val->id}}</td>
                                        <td class="align-middle">{{$val->name}}</td>
                                        <td class="align-middle">
                                        @foreach($oddt as $value)
                                            @if($val->id == $value->order_id)
                                                @foreach($product as $v)
                                                    @if($value->product_id == $v->id)
                                                    <p>{{$v->name}}</p>
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endforeach
                                        </td>
                                        <td class="align-middle">{{$val->created_at->format('m-d-Y')}}</td>
                                        <td class="align-middle">{{$val->address}}</td>
                                        <td class="align-middle"><p class="btn btn-success" style="margin:0px">Chờ xử lý</p></td>
                                        <td class="align-middle">
                                        <form action="" method="post" id="form-delete">
                                            @csrf
                                            <div class="action-link">
                                                <a name="" id="" class="btn btn-success" href="{{route('showOrder',$val->id)}}" >Chi tiết đơn hàng</a>
                                                <a name="" id="" class="btn btn-primary" data-toggle="modal" data-target="#a{{$val->id}}">Xử lý</a>
                                            </div>
                                        </form>
                                        </td>
                                    </tr>
                                    
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.card-body -->
                <!-- /.card-footer -->
            </div>
            <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{($product != "[]")? $product->count() : "0"}}</h3>

                <p>Sản phẩm</p>
              </div>
              <div class="icon">
                <i class="ion ion-laptop"></i>
              </div>
              <a href="{{route('product.index')}}" class="small-box-footer">Xem chi tiết<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{($order != "[]")? $order->count() : "0"}}<sup style="font-size: 20px"></sup></h3>

                <p>Đơn hàng</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{route('order')}}" class="small-box-footer">Xem chi tiết<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ ($user != "[]") ? $user->count()-1 : "0"}}</h3>

                <p>Khách hàng</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="{{route('user.index')}}" class="small-box-footer">Xem chi tiết <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ ($banner != "[]") ? $banner->count() : "0"}}</h3>

                <p>Ảnh bìa</p>
              </div>
              <div class="icon">
                <i class="ion ion-images"></i>
              </div>
              <a href="{{route('banner.index')}}" class="small-box-footer">Xem chi tiết <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
            @foreach($order as $val)
          <div class="modal fade" id="a{{$val->id}}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <form action="{{route('postStt',$val->id)}}" method="post">
                  @csrf
                  <div class="modal-header">
                    <h5 class="modal-title" >Thay đổi trạng thái đơn hàng số {{$val->id}}</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                    <select class="form-control" name="status" id="">
                      <option value = "{{$val->status}}">
                        @if($val->status == 0)
                          <p>Chờ xử lý</p>
                        @elseif($val->status == 1)
                          <p>Đã xử lý</p>
                        @elseif($val->status == 2)
                          <p>Đang giao hàng</p>
                        @elseif($val->status == 3)
                          <p>Đã giao hàng</p>
                        @elseif($val->status == 4)
                          <p>Đã hủy</p>
                        @endif
                      </option>
                      @if($val->status != 0)
                      <option value="0">Chờ xử lý</option>
                      @endif
                      @if($val->status != 1)
                      <option value="1">Đã xử lý</option>
                      @endif
                      @if($val->status != 2)
                      <option value="2">Đang giao hàng</option>
                      @endif
                      @if($val->status != 3)
                      <option value="3">Đã giao hàng</option>
                      @endif
                      @if($val->status != 4)
                      <option value="4">Đã hủy</option>
                      @endif
                    </select>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
                    <button type="submit" class="btn btn-primary">Thay đổi</button>
                  </div>
                </form>
                
              </div>
            </div>
          </div>
          @endforeach
    @endif
@endsection