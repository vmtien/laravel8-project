@extends('backend.layouts.master')
    @section('main')
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Thêm mới sản phẩm</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-9">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Tên sản phẩm</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập sản phẩm" name="name" value="{{old('name')}}">
                        @error('name')
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
                      <div class="form-group">
                    <!-- <label for="customFile">Custom File</label> -->
                    <label for="exampleInputEmail1">Ảnh chi tiết</label>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile" name ="uploads[]" multiple value="{{old('uploads[]')}}">
                      <label class="custom-file-label" for="customFile" name="logo">Chọn ảnh liên quan</label>
                      @error('uploads')
                      <span style="color:red">{{$message}}</span>
                      @enderror
                      @for($i = 0; $i < 10; $i++)
                      @error("uploads.$i")
                      <span style="color:red">{{$message}}</span><br>
                      @enderror
                      @endfor
                    </div>
                  </div>
                    </div>
                    <div class="col-md-3">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Giá sản phẩm</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập giá sản phẩm" name="price" value="{{old('price')}}">
                    @error('price')
                      <span style="color:red">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Giá khuyến mãi</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập giá khuyến mãi" name="sale_price" value="{{old('sale_price')}}">
                    @error('sale_price')
                      <span style="color:red">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <!-- <label for="customFile">Custom File</label> -->
                    <label for="exampleInputEmail1">Ảnh</label>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile" name ="file" value="{{old('file')}}">
                      <label class="custom-file-label" for="customFile" name="logo">Chọn ảnh</label>
                      @error('file')
                      <span style="color:red">{{$message}}</span>
                    @enderror
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Danh mục</label>
                    <select class="form-control" name="category_id" id="input" required="required">
                      <option value="0">-- Chọn danh mục --</option>
                      @foreach($cate as $value)
                      <option value="{{$value->id}}">{{$value->name}}</option>
                      @endforeach
                    </select>
                    @error('category_id')
                      <span style="color:red">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Hãng</label>
                    <select class="form-control" name="brand_id" id="input" required="required">
                      <option value=0 >-- Chọn hãng --</option>
                      @foreach($brand as $val)
                      <option value="{{$val->id}}">{{$val->name}}</option>
                      @endforeach
                    </select>
                    @error('brand_id')
                      <span style="color:red">{{$message}}</span>
                    @enderror
                  </div>
                  </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                    <label for="exampleInputEmail1">Thông số kỹ thuật</label>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="exampleInputEmail1">CPU</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập loại CPU" name="CPU" value="{{old('CPU')}}">
                                @error('CPU')
                                  <span style="color:red">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">RAM</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập loại RAM" name="RAM" value="{{old('RAM')}}">
                                @error('RAM')
                                  <span style="color:red">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Màn Hình</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập loại màn hình" name="screen" value="{{old('screen')}}">
                                @error('screen')
                                  <span style="color:red">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Đồ họa</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập loại đồ họa" name="graphics" value="{{old('graphics')}}">
                                @error('graphics')
                                  <span style="color:red">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Ổ cứng</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập loại ổ cứng" name="HardDrive" value="{{old('HardDrive')}}">
                                @error('HardDrive')
                                  <span style="color:red">{{$message}}</span>
                                @enderror
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Hệ điều hành</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập hệ điều hành" name="OperatingSystem" value="{{old('OperatingSystem')}}">
                                @error('OperatingSystem')
                                  <span style="color:red">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Trọng lượng (kg)</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập trọng lượng" name="weight" value="{{old('weight')}}">
                                @error('weight')
                                  <span style="color:red">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Kích thước (mm)</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập kích thước" name="size" value="{{old('size')}}">
                                @error('size')
                                  <span style="color:red">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Xuất xứ</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập xuất xứ" name="origin" value="{{old('origin')}}">
                                @error('origin')
                                  <span style="color:red">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Năm ra mắt</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Năm ra mắt" name="DebutYear" value="{{old('DebutYear')}}">
                                @error('DebutYear')
                                  <span style="color:red">{{$message}}</span>
                                @enderror
                            </div>
                          </div>
                      </div>
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