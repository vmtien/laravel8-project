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
                <h3 class="card-title">Danh sách sản phẩm </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body ">
                <table class="table table-striped" id="myData">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Tên sản phẩm</th>
                      <th>Giá</th>
                      <th>Giá KM</th>
                      <th>Ảnh</th>
                      <th>Thể loại</th>
                      <th>Hãng</th>
                      <th>Trạng thái</th>
                      <th class ="text-right">Tùy chọn</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($pro as $value)
                        <tr>
                            <td>{{$value->id}}</td>
                            <td>{{$value->name}}</td>
                            <td>{{number_format($value->price)}}</td>
                            <td>{{number_format($value->sale_price)}}</td>
                            <td><img src="{{url('uploads')}}/images/{{$value->image}}" alt="" width="70px" height="50px"></td>
                            @foreach($cate as $val)
                            @if($value->category_id == $val->id)
                            <td>{{$val->name}}</td>
                            @endif
                            @endforeach
                            @foreach($bra as $v)
                            @if($value->brand_id == $v->id)
                            <td><img src="{{url('uploads')}}/Logo/{{$v->logo}}" alt="" width="50px" height="50px"></td>
                            @endif
                            @endforeach
                            @if($value->status == 0)
                            <td>Ẩn</td>
                            @else
                            <td>Hiện</td>
                            @endif
                            <td class ="text-right">
                              <form action="" method="POST" id="form-delete">
                              @method('DELETE')
                              @csrf
                              <a name="" id="" class="btn btn-success" href="{{route('product.edit',$value->id)}}" >Sửa</a>
                              <a name="" id="" class="btn btn-danger btndelete" href="{{route('product.destroy',$value->id)}}" >Xóa</a>
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
                  <a name="" id="" class="btn btn-info" href="{{route('product.create')}}" >Thêm mới</a>
            </div>
      
    @endsection