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
                <h3 class="card-title">Danh sách đơn hàng</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body ">
                <table class="table table-striped" id="myData">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Khách hàng</th>
                      <th>Tổng tiền</th>
                      <th>Ngày đặt</th>
                      <th>Địa chỉ nhận hàng</th>
                      <th>Trạng thái</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($orders as $value)
                        <tr>
                            <td>{{$value->id}}</td>
                            <td>{{$value->name}}</td>
                            <td>{{number_format($value->total_amount)}}</td>
                            <td>{{$value->created_at->format('m-d-Y')}}</td>
                            <td>{{$value->address}}</td>
                            @if($value->status == 0)
                              <td ><p class="btn btn-success">Chờ xử lý</p></td>
                            @elseif($value->status == 1)
                              <td ><p class="btn btn-warning">Đã xử lý</p></td>
                            @elseif($value->status == 2)
                              <td ><p class="btn btn-info">Đang giao hàng</p></td>
                            @elseif($value->status == 3)
                              <td ><p class="btn btn-secondary">Đã giao hàng</p></td>
                            @elseif($value->status == 4)
                              <td ><p class="btn btn-danger">Đã hủy</p></td>
                            @endif
                            
                            <td>
                              <form action="" method="post" id="form-delete">
                                @csrf
                                  <div class="action-link">
                                    <a name="" id="" class="btn btn-success" href="{{route('showOrder',$value->id)}}" >Chi tiết đơn hàng</a>
                                    <a name="" id="" class="btn btn-primary" data-toggle="modal" data-target="#a{{$value->id}}">Xử lý</a>
                                    <a name="" id="" class="btn btn-danger btndelete" href="{{route('deleteOrder',$value->id)}}" >Xóa</a>
                                  </div>
                              </form>
                            </td>
                          </tr>
                    @endforeach
                </tbody>
                </table>
              </div>
              <!-- /.card-body -->
          </div>
          <!-- Modal -->
          @foreach($orders as $val)
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
          <!-- Modal -->
  
    @endsection