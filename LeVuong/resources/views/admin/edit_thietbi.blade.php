@extends('admin.dashboard')
@section('admin_content')

<div class="row">
            <div class="col-lg-12">
                    <section class="panel">

                        <header class="panel-heading">
                           Cập nhật thông tin Thiết bị
                        </header>
                        <div class="panel-body">

                             @foreach($edit_thietbi as $key => $edit_value)
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/update-thietbi/'.$edit_value->id_thietbi)}}" method="post" enctype="multipart/form-data">
                                 {{csrf_field()}}   
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên thiết bị</label>
                                    <input value="{{$edit_value->ten_thietbi}}" type="text" name="ten_thietbi" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Giá thiết bị</label>
                                    <input value="{{$edit_value->gia_thietbi}}" type="text" name="gia_thietbi" class="form-control" id="exampleInputEmail1" placeholder="Giác">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Ảnh thiết bị</label>
                                    <input value="{{$edit_value->anh_thietbi}}" type="file" name="anh_thietbi" class="form-control" id="exampleInputEmail1">
                                    <img src="{{URL::to('public/upload/sanpham/'.$edit_value->anh_thietbi)}}" height="100" width="100">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả thiết bị</label>
                                    <textarea style="resize: none;" rows="8" name="mota_thietbi" class="form-control"  id="exampleInputPassword1">{{$edit_value->mota_thietbi}}</textarea> 
                                </div>
                                
                                
                                <button type="submit" name="update_thietbi" class="btn btn-info">Cập nhật</button>
                            </form>
                            </div>
                            @endforeach
                        </div>
                    </section>

            </div>
@endsection