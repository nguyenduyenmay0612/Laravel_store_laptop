<?php

namespace App\Http\Controllers;
use App\Http\Controllers\CameraController;
use Illuminate\Http\Request;

use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class CameraController extends Controller
{
    public function add_camera(){
        return view('admin.add_camera');

    }

    public function all_camera(){

       $all_camera = DB::table('camera')->get();
       $manager_camera = view('admin.all_camera')->with('all_camera',$all_camera);

        return view('admin.dashboard')->with('admin.all_camera', $manager_camera);
    }

     public function save_camera(Request $request){
        $data = array();
        $data['ten_camera'] = $request->ten_camera;
        $data['gia_camera'] = $request->gia_camera;
        $data['mota_camera'] = $request->mota_camera;
       $data['anh_camera'] = $request->anh_camera;
        $get_anh= $request->file('anh_camera');
        if($get_anh){
         $get_tenanh = $get_anh->getClientOriginalName();
            $tenanh = current(explode('.',$get_tenanh)); 
            $new_anh = $tenanh.rand(0,99).'.'.$get_anh->getClientOriginalExtension();
            $get_anh->move('public/upload/sanpham',$new_anh);
            $data['anh_camera'] = $new_anh;
            DB::table('camera')->insert($data);
            Session::put('message','Thêm sản phẩm thành công');
            return Redirect::to('all-camera');
        }
        DB::table('camera')->insert($data);
            Session::put('message','Thêm sản phẩm thành công');
            return Redirect::to('all-camera');

    }
    public function edit_camera($id_camera){

       $edit_camera = DB::table('camera')->where('id_camera',$id_camera)->get();
       $manager_camera = view('admin.edit_camera')->with('edit_camera',$edit_camera);

        return view('admin.dashboard')->with('admin.edit_camera', $manager_camera);

    }
    public function update_camera(Request $request,$id_camera){
        $data=array();
         $data['ten_camera'] = $request->ten_camera;
        $data['gia_camera'] = $request->gia_camera;
        $data['mota_camera'] = $request->mota_camera;
       $get_anh = $request ->file('anh_camera');

          if($get_anh){
            $get_tenanh = $get_anh->getClientOriginalName();
            $tenanh = current(explode('.',$get_tenanh)); 
            $new_anh = $tenanh.rand(0,99).'.'.$get_anh->getClientOriginalExtension();
            $get_anh->move('public/upload/sanpham',$new_anh);
            $data['anh_camera'] = $new_anh;
        DB::table('camera')->where('id_camera',$id_camera)->update($data);
        Session::put('message','Cập nhật sản phẩm thành công');
         return Redirect::to('all-camera');
    }
        DB::table('camera')->where('id_camera',$id_camera)->update($data);
        Session::put('message','Cập nhật sản phẩm thành công');
         return Redirect::to('all-camera');
 }
    public function delete_camera($id_camera){
      DB::table('camera')->where('id_camera',$id_camera)->delete();
      Session::put('message','Xoá camera thành công');
         return Redirect::to('all-camera');
    }

     public function timkiem_camera(Request $request){
        $keyword = $request->key2;
        
        $timkiem_camera = DB::table('camera')->where('ten_camera','like','%'.$keyword.'%')
                                             ->orwhere('gia_camera',$keyword)->get();  
        return view('layout.timkiem_camera')->with('timkiem_camera',$timkiem_camera);

    }
}
