@extends('admin.dashboard')
@section('admin_content')

<div class="row">
            <div class="col-lg-12">
                    <section class="panel">

                        <header class="panel-heading">
                           Cập nhật thông tin Laptop
                        </header>
                        <div class="panel-body">

                             @foreach($edit_laptop as $key => $edit_value)
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/update-laptop/'.$edit_value->id_laptop)}}" method="post" enctype="multipart/form-data">
                                 {{csrf_field()}}   
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Laptop</label>
                                    <input value="{{$edit_value->ten_laptop}}" type="text" name="ten_laptop" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Giá Laptop</label>
                                    <input value="{{$edit_value->gia_laptop}}" type="text" name="gia_laptop" class="form-control" id="exampleInputEmail1" placeholder="Giác">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Ảnh Laptop</label>
                                    <input value="{{$edit_value->anh_laptop}}" type="file" name="anh_laptop" class="form-control" id="exampleInputEmail1">
                                    <img src="{{URL::to('public/upload/sanpham/'.$edit_value->anh_laptop)}}" height="100" width="100">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả Laptop</label>
                                    <textarea style="resize: none;" rows="8" name="mota_laptop" class="form-control"  id="exampleInputPassword1">{{$edit_value->mota_laptop}}</textarea> 
                                </div>
                                
                                
                                <button type="submit" name="update_laptop" class="btn btn-info">Cập nhật</button>
                            </form>
                            </div>
                            @endforeach
                        </div>
                    </section>

            </div>
@endsection