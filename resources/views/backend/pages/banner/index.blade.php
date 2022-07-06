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
                <h3 class="card-title">Danh sách ảnh bìa</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body ">
                <table class="table table-striped" id="myData">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th width ="200px">Tên</th>
                      <th>Ảnh</th>
                      <th width ="300px">Mô tả</th>
                      <th>Khuyến mãi</th>
                      <th>Ưu tiên</th>
                      <th>Trạng thái</th>
                      <th class ="text-right">Tùy chọn</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($banner as $value)
                        <tr>
                            <td>{{$value->id}}</td>
                            <td width ="200px">{{$value->name}}</td>
                            <td><img src="{{url('uploads')}}/Banner/{{$value->image}}" alt="" width="50px" height="50px"></td>
                            <td width ="300px">{{$value->description}}</td>
                            <td>{{($value->sale != null) ? $value->sale .' ' .'%'  : ''}}</td>
                            <td>
                              @if($value->prioty == 1)
                                Ảnh bìa 1
                              @elseif($value->prioty == 2 )
                                Ảnh bìa 2
                              @elseif ($value->prioty == 3)
                                Ảnh bìa 3
                              @elseif($value->prioty == 4)
                                Ảnh bìa 4
                              @else
                                Không sử dụng
                              @endif
                            </td>
                            <td >{{ ($value->status == 0) ? 'Ẩn' : 'Hiện'}}</td>
                            <td class ="text-right">
                              <form action="" method="POST" id="form-delete">
                              @method('DELETE')
                              @csrf
                              <a name="" id="" class="btn btn-success" href="{{route('banner.edit',$value->id)}}" >Sửa</a>
                              <a name="" id="" class="btn btn-danger btndelete" href="{{route('banner.destroy',$value->id)}}" >Xóa</a>
                              <!-- <button type="submit" class="btn btn-danger">Xóa</button> -->
                              </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
              </div>
              <!-- /.card-body -->
          </div>
          <div class="">
                  <a name="" id="" class="btn btn-info" href="{{route('banner.create')}}" >Thêm mới</a>
            </div>
    @endsection