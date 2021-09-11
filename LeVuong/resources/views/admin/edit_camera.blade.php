@extends('admin.dashboard')
@section('admin_content')

<div class="row">
            <div class="col-lg-12">
                    <section class="panel">

                        <header class="panel-heading">
                           Cập nhật thông tin camera
                        </header>
                        <div class="panel-body">

                             @foreach($edit_camera as $key => $edit_value)
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/update-camera/'.$edit_value->id_camera)}}" method="post" enctype="multipart/form-data">
                                 {{csrf_field()}}   
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên camera</label>
                                    <input value="{{$edit_value->ten_camera}}" type="text" name="ten_camera" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Giá camera</label>
                                    <input value="{{$edit_value->gia_camera}}" type="text" name="gia_camera" class="form-control" id="exampleInputEmail1" placeholder="Giác">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Ảnh camera</label>
                                    <input value="{{$edit_value->anh_camera}}" type="file" name="anh_camera" class="form-control" id="exampleInputEmail1">
                                    <img src="{{URL::to('public/upload/sanpham/'.$edit_value->anh_camera)}}" height="100" width="100">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả camera</label>
                                    <textarea style="resize: none;" rows="8" name="mota_camera" class="form-control"  id="exampleInputPassword1">{{$edit_value->mota_camera}}</textarea> 
                                </div>
                                
                                
                                <button type="submit" name="update_camera" class="btn btn-info">Cập nhật</button>
                            </form>
                            </div>
                            @endforeach
                        </div>
                    </section>

            </div>
@endsection