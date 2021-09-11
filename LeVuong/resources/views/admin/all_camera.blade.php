@extends('admin.dashboard')
@section('admin_content')

<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
     Bảng camera
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
            <th>Tên camera</th>
             <th>Hình ảnh camera</th>
              <th>Giá camera</th>
            <th>Mô tả</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($all_camera as $key=>$camera )
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{ $camera->ten_camera}}</td>
            <td><img src="public/upload/sanpham/{{ $camera->anh_camera}}" height="100" width="150"></td>
             <td>{{ $camera->gia_camera}}</td>
            <td>{{ $camera->mota_camera}}</td>
            <td><a href="{{URL::to('edit-camera/'.$camera->id_camera)}}">Sửa</a>
           <a onclick="return confirm('Bạn có muốn xoá  sản phẩm này không?')" href="{{URL::to('delete-camera/'.$camera->id_camera)}}">Xoá</a> </td>
           @endforeach 
          </tr>
         
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection