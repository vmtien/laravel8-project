@extends('backend.layouts.master')
    @section('main')
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Thêm mới ảnh bìa</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('banner.update',$banner->id)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-9">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Tên ảnh bìa</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên ảnh bìa" name="name" value="{{$banner->name}}">
                        @error('name')
                          <span style="color:red">{{$message}}</span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Đường dẫn</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập đường dẫn" name="link" value="{{$banner->link}}">
                        @error('link')
                          <span style="color:red">{{$message}}</span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Mô tả</label>
                          <textarea class="form-control" id="content" name="description" placeholder="Mô tả sản phẩm" value="{{$banner->description}}">{{$banner->description}}</textarea>
                        @error('description')
                          <span style="color:red">{{$message}}</span>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Ảnh</label>
                        <div class="row">
                            <div class="col-md-9">
                              
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="customFile" name ="image">
                                  <label class="custom-file-label" for="customFile" name="logo">1 ảnh đã được chọn</label>
                                  @error('image')
                                  <span style="color:red">{{$message}}</span>
                                  @enderror
                                </div>
                            </div>
                            <div class="col-md-3 btn btn-info" data-toggle="modal" data-target="#img">Xem</div>
                          </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Khuyến mãi</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập khuyến mãi" name="sale" value="{{$banner->sale}}">
                        @error('link')
                          <span style="color:red">{{$message}}</span>
                        @enderror
                      </div>
                      <div class="form-group">
                          <label for="exampleInputEmail1">Ưu tiên sử dụng</label>
                          <select name="prioty" id="" class="form-control">
                            <option value="{{$banner->prioty}}">
                              @if($banner->prioty == 1)
                                Ảnh bìa 1
                              @elseif($banner->prioty ==2)
                                Ảnh bìa 2
                              @elseif($banner->prioty == 3)
                                Ảnh bìa 3
                              @elseif($banner->prioty == 4)
                                Ảnh bìa 4
                              @else
                                Không sử dụng
                              @endif
                            </option>
                            @if($banner->prioty != 0)
                            <option value="0">Không sử dụng</option>
                            @endif
                            @if($banner->prioty != 1)
                            <option value="1">Ảnh bìa 1</option>
                            @endif
                            @if($banner->prioty != 2)
                            <option value="2">Ảnh bìa 2</option>
                            @endif
                            @if($banner->prioty != 3)
                            <option value="3">Ảnh bìa 3</option>
                            @endif
                            @if($banner->prioty != 4)
                            <option value="4">Ảnh bìa 4</option>
                            @endif
                          </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Chọn trạng thái</label>
                        <div class="radio">
                            <lable>
                                <input type="radio" name="status" id="input" value="1" {{$banner->status == 1?'checked':''}}>
                                Hiện
                            </lable>
                            <lable>
                                <input type="radio" name="status" id="input" value="0" {{$banner->status == 0?'checked':''}}>
                                Ẩn
                            </lable>
                        </div>
                  </div> 
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Sửa</button>
                </div>
              </form>
            </div>
            <div class="modal fade" id="img" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content" >
                    <div class="modal-header">
                        <h5 class="modal-title">Xem ảnh</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                  <div class="modal-body">
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-md-4"><img src="{{url('uploads')}}/Banner/{{$banner->image}}" alt="" width="200px"></div>
                        <div class="col-md-8  text-left"><div style="padding:50px 0px">{{$banner->image}}</div></div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
    @endsection
    
                  
                  
                  
                  
                  