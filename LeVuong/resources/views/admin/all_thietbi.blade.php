@extends('admin.dashboard')
@section('admin_content')

<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
     Bảng thiết bị
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
            <th>Tên thiết bị</th>
             <th>Hình ảnh thiết bị</th>
              <th>Giá thiết bị</th>
            <th>Mô tả</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($all_thietbi as $key=>$thietbi )
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{ $thietbi->ten_thietbi}}</td>
            <td><img src="public/upload/sanpham/{{ $thietbi->anh_thietbi}}" height="100" width="150"></td>
             <td>{{ $thietbi->gia_thietbi}}</td>
            <td>{{ $thietbi->mota_thietbi}}</td>
            <td><a href="{{URL::to('edit-thietbi/'.$thietbi->id_thietbi)}}">Sửa</a>
           <a onclick="return confirm('Bạn có muốn xoá  sản phẩm này không?')" href="{{URL::to('delete-thietbi/'.$thietbi->id_thietbi)}}">Xoá</a>
           @endforeach 
          </tr>
         
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection