@extends('backend.layouts.master')
    @section('main')
      @if(Session::get('success'))
        <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <strong>{{Session::get('success')}}</strong>
        </div>
      @endif
      @if(Session::get('error'))
        <div class="alert alert-danger">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <strong>{{Session::get('error')}}</strong>
        </div>
      @endif
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Danh sách khách hàng</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body ">
                <table class="table table-striped" id="myData">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Tên người dùng</th>
                      <th>Địa chỉ</th>
                      <th>Số điện thoại</th>
                      <th>Email</th>
                      <th>Trạng thái</th>
                      <th class ="text-right">Tùy chọn</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($user as $value)
                      @if($value->role != 1)
                        <tr>
                            <td>{{$value->id}}</td>
                            <td>{{$value->name}}</td>
                            <td>{{$value->address}}</td>
                            <td>{{$value->phone}}</td>
                            <td>{{$value->email}}</td>
                            @if($value->role == 0)
                              <td><div class="btn btn-success">Đang hoạt động</div></td>
                            @elseif($value->role ==2)
                            <td><div class="btn btn-danger">Bị khóa</div></td>
                            @endif
                            <td class ="text-right">
                              <form action="" method="POST" id="form-delete">
                              @method('DELETE')
                              @csrf
                              <a name="" id="" class="btn btn-primary" data-toggle="modal" data-target="#a{{$value->id}}">Sửa</a>
                              <a name="" id="" class="btn btn-danger btndelete" href="{{route('user.destroy',$value->id)}}">Xóa</a>
                              <!-- <button type="submit" class="btn btn-danger">Xóa</button> -->
                              </form>
                            </td>
                        </tr>
                      @endif
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
          </div>
          <!-- Button trigger modal -->
          <!-- Modal -->
          @foreach($user as $val)
            <div class="modal fade" id="a{{$val->id}}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <form action="{{route('user.update',$val->id)}}" method="post">
                    @method('PUT')
                    @csrf
                      <div class="modal-header">
                          <h4 class="modal-title">Chỉnh sửa trạng thái khách hàng</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                      <div class="modal-body">
                        <div class="container-fluid">
                          <div><h5>Thông tin khách hàng</h5></div>
                          <div><p><b>Tên người dùng:</b>{{$val->name}}</p></div>
                          <div><p><b>Địa chỉ:</b>{{$val->address}}</p></div>
                          <div><p><b>Số điện thoại:</b>{{$val->phone}}</p></div>
                          <div><p><b>Tài khoản:</b>{{$val->email}}</p></div>
                          <div>
                            <p><b>Trạng thái:</b>
                              @if($val->role == 0)
                                <span class="btn btn-success">Đang hoạt động</span>
                              @elseif($val->role == 2)
                              <span class="btn btn-danger">Bị khóa</span>
                              @endif
                            </p>
                          </div>
                          <div>
                            
                              <div class="row">
                                <label for="">Thay đổi trạng thái</label>
                              </div>
                              <div class="row">
                                <div class="col-md-8">
                                  <select name="role" id="" class="form-control">
                                    <option value="{{$val->role}}">{{($val->role == 0)?'Đang hoạt động':'Bị khóa'}}</option>
                                    @if($val->role == 0)
                                      <option value="2">Bị khóa</option>
                                    @elseif($val->role == 2)
                                      <option value="0">Đang hoạt động</option>
                                    @endif
                                  </select>
                                </div>
                                <div class="col-md-4"></div>
                              </div>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
                        <button type="submit" class="btn btn-primary">Lưu</button>
                      </div>
                    </form>
                </div>
              </div>
            </div>
          @endforeach 
    @endsection