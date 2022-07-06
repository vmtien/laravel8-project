@extends('backend.layouts.master')
    @section('main')
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Thêm mới nhãn hiệu</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('brand.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tên nhãn hiệu</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập nhãn hiệu" name="name" value="{{old('name')}}">
                    @error('name')
                      <span style="color:red">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <!-- <label for="customFile">Custom File</label> -->
                    <label for="exampleInputEmail1">Logo</label>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile" name ="file">
                      <label class="custom-file-label" for="customFile" name="logo">Chọn logo</label>
                      @error('file')
                      <span style="color:red">{{$message}}</span>
                    @enderror
                    </div>
                  </div>
                  <div class="form-group">
                        <label for="exampleInputEmail1">Chọn trạng thái</label>
                        <div class="radio">
                            <lable>
                                <input type="radio" name="status" id="input" value="1" checked="checked">
                                Hiện
                            </lable>
                            <lable>
                                <input type="radio" name="status" id="input" value="0">
                                Ẩn
                            </lable>
                        </div>
                  </div> 
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Thêm mới</button>
                </div>
              </form>
            </div>
    @endsection