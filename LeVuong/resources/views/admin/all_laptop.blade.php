@extends('admin.dashboard')
@section('admin_content')

<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
     Bảng danh mục
    </div>
    <div class="table-responsive">
       <?php 
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert">'.$message.'</span>';
                                Session::put('message',null);
                            }
                            ?>
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>Tên Laptop</th>
             <th>Hình ảnh Laptop</th>
              <th>Giá Laptop</th>
            <th>Mô tả</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($all_laptop as $key=>$laptop )
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{ $laptop->ten_laptop}}</td>
            <td><img src="public/upload/sanpham/{{ $laptop->anh_laptop}}" height="100" width="150"></td>
             <td>{{ $laptop->gia_laptop}}</td>
            <td>{{ $laptop->mota_laptop}}</td>
            <td><a href="{{URL::to('edit-laptop/'.$laptop->id_laptop)}}">Sửa</a>
           <a onclick="return confirm('Bạn có muốn xoá  sản phẩm này không?')" href="{{URL::to('delete-laptop/'.$laptop->id_laptop)}}">Xoá</a>
           @endforeach 
          </tr>
         
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection