@extends('backend.layouts.master')
    @section('main')
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Thêm mới ảnh bìa</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('banner.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                      <div class="col-md-9">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Tên ảnh bìa</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên ảnh bìa" name="name" value="{{old('name')}}">
                          @error('name')
                            <span style="color:red">{{$message}}</span>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Đường dẫn</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập đường dẫn" name="link" value="{{old('link')}}">
                          @error('link')
                            <span style="color:red">{{$message}}</span>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Mô tả</label>
                            <textarea class="form-control" id="content" name="description" placeholder="Mô tả sản phẩm" value="{{old('description')}}">{{old('description')}}</textarea>
                          @error('description')
                            <span style="color:red">{{$message}}</span>
                          @enderror
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Ảnh</label>
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name ="image">
                            <label class="custom-file-label" for="customFile" name="logo">Chọn ảnh bìa</label>
                            @error('image')
                            <span style="color:red">{{$message}}</span>
                            @enderror
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Ưu tiên sử dụng</label>
                          <select name="prioty" id="" class="form-control">
                            <option value="0">Không sử dụng</option>
                            <option value="1">Ảnh bìa 1</option>
                            <option value="2">Ảnh bìa 2</option>
                            <option value="3">Ảnh bìa 3</option>
                            <option value="4">Ảnh bìa 4</option>
                          </select>
                          @error('prioty')
                            <span style="color:red">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Khuyến mãi</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập khuyến mãi" name="sale" value="{{old('sale')}}">
                          @error('sale')
                            <span style="color:red">{{$message}}</span>
                          @enderror
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
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Thêm mới</button>
                </div>
              </form>
            </div>
    @endsection
    
                  
                  
                  
                  
                 
                  