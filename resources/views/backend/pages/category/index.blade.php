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
                <h3 class="card-title">Danh sách danh mục </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body ">
                <table class="table table-striped" id="myData">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Tên</th>
                      <th>Tổng sản phẩm</th>
                      <th>Trạng thái</th>
                      <th>Ngày thêm</th>
                      <th class ="text-right">Tùy chọn </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($cate as $value)
                        <tr>
                            <td>{{$value->id}}</td>
                            <td>{{$value->name}}</td>
                            <td>{{$value->products->count()}}</td>
                            @if($value->status == 0)
                            <td>Ẩn</td>
                            @else
                            <td>Hiện</td>
                            @endif
                            <td>{{$value->created_at->format('m-d-Y')}}</td>
                            <td class ="text-right">
                              <form action="" method="POST" id="form-delete">
                              @method('DELETE')
                              @csrf
                              <a name="" id="" class="btn btn-success" href="{{route('category.edit',$value->id)}}" >Sửa</a>
                              <a name="" id="" class="btn btn-danger btndelete" href="{{route('category.destroy',$value->id)}}" >Xóa</a>
                              <!-- <button type="submit" class="btn btn-danger btndelete">Xóa</button> -->
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
                  <a name="" id="" class="btn btn-info" href="{{route('category.create')}}" >Thêm mới</a>
            </div>
    @endsection