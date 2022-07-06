@extends('backend.layouts.master')
    @section('main')
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Sửa sản phẩm</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('product.update',$pro->id)}}" method="POST" enctype="multipart/form-data">
              @method('PUT')
                @csrf
                <div class="card-body">
                <div class="row">
                    <div class="col-md-9">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Tên sản phẩm</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập sản phẩm" name="name" value="{{$pro->name}}">
                        @error('name')
                          <span style="color:red">{{$message}}</span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Mô tả</label>
                          <textarea class="form-control" id="content" name="description" placeholder="Mô tả sản phẩm" value="">{{$pro->description}}</textarea>
                        @error('description')
                          <span style="color:red">{{$message}}</span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <!-- <label for="customFile">Custom File</label> -->
                        <label for="exampleInputEmail1">Ảnh chi tiết</label>
                        <div class="row">
                          <div class="col-md-11">
                          <div class="custom-file">
                          <input type="file" class="custom-file-input" id="customFile" name ="uploads[]" value="{{$imgEdit}}" multiple>
                          <label class="custom-file-label" for="customFile" name="logo" value="{{$imgEdit}}">{{$imgEdit}} Ảnh đã được chọn</label>
                          
                        </div>
                          </div>
                          <div class="col-md-1 btn btn-info" data-toggle="modal" data-target="#listImg">Xem</div>
                        </div>
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
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Giá sản phẩm</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập giá sản phẩm" name="price" value="{{$pro->price}}">
                        @error('price')
                          <span style="color:red">{{$message}}</span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Giá khuyến mãi</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập giá khuyến mãi" name="sale_price" value="{{$pro->sale_price}}">
                        @error('sale_price')
                          <span style="color:red">{{$message}}</span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <!-- <label for="customFile">Custom File</label> -->
                        <label for="exampleInputEmail1">Ảnh</label>
                        <div class="row">
                          <div class="col-md-9">
                            <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name ="file" value="{{$pro->image}}">
                            <label class="custom-file-label" for="customFile" name="logo" value="{{$pro->image}}">1 Ảnh đã được chọn</label>
                            @error('file')
                              <span style="color:red">{{$message}}</span>
                            @enderror
                          </div>
                          </div>
                          <div class="col-md-3 btn btn-info" data-toggle="modal" data-target="#img">Xem</div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Danh mục</label>
                        <select class="form-control" name="category_id" id="input" required="required">
                          <option value="{{$pro->category_id}}">{{$cateEdit->name}}</option>
                          @foreach($cate as $value)
                          <option value="{{$value->id}}">"{{$value->name}}"</option>
                          @endforeach
                        </select>
                        @error('category_id')
                          <span style="color:red">{{$message}}</span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Hãng</label>
                        <select class="form-control" name="brand_id" id="input" required="required">
                          <option value="{{$pro->brand_id}}">{{$braEdit->name}}</option>
                          @foreach($bra as $val)
                          <option value="{{$val->id}}">"{{$val->name}}"</option>
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
                              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập loại CPU" name="CPU" value="{{$detailEdit->CPU}}">
                              @error('CPU')
                                <span style="color:red">{{$message}}</span>
                              @enderror
                          </div>
                          <div class="form-group">
                              <label for="exampleInputEmail1">RAM</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập loại RAM" name="RAM" value="{{$detailEdit->RAM}}">
                              @error('RAM')
                                <span style="color:red">{{$message}}</span>
                              @enderror
                          </div>
                          <div class="form-group">
                              <label for="exampleInputEmail1">Màn Hình</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập loại màn hình" name="screen" value="{{$detailEdit->screen}}">
                              @error('screen')
                                <span style="color:red">{{$message}}</span>
                              @enderror
                          </div>
                          <div class="form-group">
                              <label for="exampleInputEmail1">Đồ họa</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập loại đồ họa" name="graphics" value="{{$detailEdit->graphics}}">
                              @error('graphics')
                                <span style="color:red">{{$message}}</span>
                              @enderror
                          </div>
                          <div class="form-group">
                              <label for="exampleInputEmail1">Ổ cứng</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập loại ổ cứng" name="HardDrive" value="{{$detailEdit->HardDrive}}">
                              @error('HardDrive')
                                <span style="color:red">{{$message}}</span>
                              @enderror
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                              <label for="exampleInputEmail1">Hệ điều hành</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập hệ điều hành" name="OperatingSystem" value="{{$detailEdit->OperatingSystem}}">
                              @error('OperatingSystem')
                                <span style="color:red">{{$message}}</span>
                              @enderror
                          </div>
                          <div class="form-group">
                              <label for="exampleInputEmail1">Trọng lượng (kg)</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập trọng lượng" name="weight" value="{{$detailEdit->weight}}">
                              @error('weight')
                                <span style="color:red">{{$message}}</span>
                              @enderror
                          </div>
                          <div class="form-group">
                              <label for="exampleInputEmail1">Kích thước (mm)</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập kích thước" name="size" value="{{$detailEdit->size}}">
                              @error('size')
                                <span style="color:red">{{$message}}</span>
                              @enderror
                          </div>
                          <div class="form-group">
                              <label for="exampleInputEmail1">Xuất xứ</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập xuất xứ" name="origin" value="{{$detailEdit->origin}}">
                              @error('origin')
                                <span style="color:red">{{$message}}</span>
                              @enderror
                          </div>
                          <div class="form-group">
                              <label for="exampleInputEmail1">Năm ra mắt</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Năm ra mắt" name="DebutYear" value="{{$detailEdit->DebutYear}}">
                              @error('DebutYear')
                                <span style="color:red">{{$message}}</span>
                              @enderror
                          </div>
                        </div>
                      </div>
                       </div>
                        <div class="form-group">
                              <label for="exampleInputEmail1">Chọn trạng thái</label>
                              <div class="radio">
                                  <lable>
                                      <input type="radio" name="status" id="input" value="1" {{$pro->status == 1?'checked':''}}>
                                      Hiện
                                  </lable>
                                  <lable>
                                      <input type="radio" name="status" id="input" value="0" {{$pro->status == 0?'checked':''}}>
                                      Ẩn
                                  </lable>
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
            <!-- Button trigger modal -->
            <!-- Modal -->
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
                        <div class="col-md-4"><img src="{{url('uploads')}}/images/{{$pro->image}}" alt="" width="200px"></div>
                        <div class="col-md-8  text-left"><div style="padding:50px 0px">{{$pro->image}}</div></div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal fade" id="listImg" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content" >
                    <div class="modal-header">
                        <h5 class="modal-title">Xem ảnh chi tiết</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                  <div class="modal-body">
                    <div class="container-fluid">
                      @foreach($imgList as $val)
                        <div class="row">
                          <div class="col-md-4"><img src="{{url('uploads')}}/Imgproduct/{{$val->image}}" alt="" width="200px"></div>
                          <div class="col-md-8  text-left"><div style="padding:50px 0px">{{$val->image}}</div></div>
                        </div>
                      @endforeach
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
            
    @endsection