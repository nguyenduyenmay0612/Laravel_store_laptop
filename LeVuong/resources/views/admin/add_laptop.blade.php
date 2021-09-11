@extends('admin.dashboard')
@section('admin_content')

<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm Laptop
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
                                <form role="form" action="{{URL::to('/save-laptop')}}" method="post" enctype="multipart/form-data">
                                 {{csrf_field()}}   
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Laptop</label>
                                    <input type="text" name="ten_laptop" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ảnh</label>
                                    <input type="file" name="anh_laptop" class="form-control" id="exampleInputEmail1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giá Laptop</label>
                                    <input type="text" name="gia_laptop" class="form-control" id="exampleInputEmail1" placeholder="Giá sản phẩm">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả Laptop</label>
                                    <textarea style="resize: none;" rows="8" name="mota_laptop" class="form-control"  id="exampleInputPassword1" placeholder="Mô tả danh mục"></textarea> 
                                </div>
                                
                                
                                <button type="submit" name="add_laptop" class="btn btn-info">Thêm Laptop</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
@endsection