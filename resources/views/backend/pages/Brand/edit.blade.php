@extends('backend.layouts.master')
    @section('main')
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Sửa danh mục</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('brand.update',$bra->id)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tên nhãn hiệu</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập danh mục" name="name" value="{{$bra->name}}">
                    @error('name')
                      <span style="color:red">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <!-- <label for="customFile">Custom File</label> -->
                    <label for="exampleInputEmail1">Logo</label>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile" name ="file" value ="{{$bra->logo}}">
                      <label class="custom-file-label" for="customFile" name="logo">{{$bra->logo}}</label>
                      @error('file')
                      <span style="color:red">{{$message}}</span>
                    @enderror
                    </div>
                  </div>
                  <div class="form-group">
                        <label for="exampleInputEmail1">Chọn trạng thái</label>
                        <div class="radio">
                            <lable>
                                <input type="radio" name="status" id="input" value="1" {{$bra->status == 1?'checked':''}}>
                                Hiện
                            </lable>
                            <lable>
                                <input type="radio" name="status" id="input" value="0" {{$bra->status == 0?'checked':''}}>
                                Ẩn
                            </lable>
                        </div>
                  </div> 
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Sửa</button>
                </div>
              </form>
            </div>
    @endsection