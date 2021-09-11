@extends('admin.dashboard')
@section('admin_content')

<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
     Đơn hàng
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
            <th>Tên khách hàng</th>
              <th>Số điện thoại</th>
            <th>Sản phẩm</th>
             <th>Địa chỉ</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($all_donhang as $key=>$donhang )
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" ><i></i></label></td>
            <td>{{ $donhang->name}}</td>
             <td>{{ $donhang->phone}}</td>
            <td>{{ $donhang->name_sp}}</td>
             <td>{{ $donhang->add}}</td>
          <td> <a onclick="return confirm('Bạn có muốn xoá đơn hàng này không?')" href="{{URL::to('delete-donhang/'.$donhang->id_donhang)}}">Xoá</a> </td>
           @endforeach 
          </tr>
         
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection