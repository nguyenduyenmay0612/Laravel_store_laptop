@extends('admin.dashboard')
@section('admin_content1')

<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm thiết bị
                        </header>
                        <div class="panel-body">
                            <?php 
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert">'.$message.'</span>';
                                Session::put('message',null);
                            }
                            ?>
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/save-thietbi')}}" method="post" enctype="multipart/form-data">
                                 {{csrf_field()}}   
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Thiết bị</label>
                                    <input type="text" name="ten_thietbi" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ảnh</label>
                                    <input type="file" name="anh_thietbi" class="form-control" id="exampleInputEmail1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giá thiết bị</label>
                                    <input type="text" name="gia_thietbi" class="form-control" id="exampleInputEmail1" placeholder="Giá sản phẩm">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả thiết bị</label>
                                    <textarea style="resize: none;" rows="8" name="mota_thietbi" class="form-control"  id="exampleInputPassword1" placeholder="Mô tả danh mục"></textarea> 
                                </div>
                                
                                
                                <button type="submit" name="add_thietbi" class="btn btn-info">Thêm thiết bị</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
@endsection