<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ThietbiController;
use Illuminate\Http\Request;

use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class ThietbiController extends Controller
{
    public function add_thietbi(){
        return view('admin.add_thietbi');

    }

    public function all_thietbi(){

       $all_thietbi = DB::table('thietbi')->get();
       $manager_thietbi = view('admin.all_thietbi')->with('all_thietbi',$all_thietbi);

        return view('admin.dashboard')->with('admin.all_thietbi', $manager_thietbi);
    }

     public function save_thietbi(Request $request){
        $data = array();
        $data['ten_thietbi'] = $request->ten_thietbi;
        $data['gia_thietbi'] = $request->gia_thietbi;
        $data['mota_thietbi'] = $request->mota_thietbi;
       $data['anh_thietbi'] = $request->anh_thietbi;
        $get_anh= $request->file('anh_thietbi');
        if($get_anh){
         $get_tenanh = $get_anh->getClientOriginalName();
            $tenanh = current(explode('.',$get_tenanh)); 
            $new_anh = $tenanh.rand(0,99).'.'.$get_anh->getClientOriginalExtension();
            $get_anh->move('public/upload/sanpham',$new_anh);
            $data['anh_thietbi'] = $new_anh;
            DB::table('thietbi')->insert($data);
            Session::put('message','Thêm sản phẩm thành công');
            return Redirect::to('all-thietbi');
        }
        DB::table('thietbi')->insert($data);
            Session::put('message','Thêm sản phẩm thành công');
            return Redirect::to('all-thietbi');

    }
    public function edit_thietbi($id_thietbi){

       $edit_thietbi = DB::table('thietbi')->where('id_thietbi',$id_thietbi)->get();
       $manager_thietbi = view('admin.edit_thietbi')->with('edit_thietbi',$edit_thietbi);

        return view('admin.dashboard')->with('admin.edit_thietbi', $manager_thietbi);

    }
    public function update_thietbi(Request $request,$id_thietbi){
        $data=array();
         $data['ten_thietbi'] = $request->ten_thietbi;
        $data['gia_thietbi'] = $request->gia_thietbi;
        $data['mota_thietbi'] = $request->mota_thietbi;
       $get_anh = $request ->file('anh_thietbi');

          if($get_anh){
            $get_tenanh = $get_anh->getClientOriginalName();
            $tenanh = current(explode('.',$get_tenanh)); 
            $new_anh = $tenanh.rand(0,99).'.'.$get_anh->getClientOriginalExtension();
            $get_anh->move('public/upload/sanpham',$new_anh);
            $data['anh_thietbi'] = $new_anh;
        DB::table('thietbi')->where('id_thietbi',$id_thietbi)->update($data);
        Session::put('message','Cập nhật sản phẩm thành công');
         return Redirect::to('all-thietbi');
    }
        DB::table('thietbi')->where('id_thietbi',$id_thietbi)->update($data);
        Session::put('message','Cập nhật sản phẩm thành công');
         return Redirect::to('all-thietbi');
 }
    public function delete_thietbi($id_thietbi){
      DB::table('thietbi')->where('id_thietbi',$id_thietbi)->delete();
      Session::put('message','Xoá thietbi thành công');
         return Redirect::to('all-thietbi');
    }


     public function timkiem_thietbi(Request $request){
        $keyword = $request->key1;
        
        $timkiem_thietbi = DB::table('thietbi')->where('ten_thietbi','like','%'.$keyword.'%')
                                             ->orwhere('gia_thietbi',$keyword)->get();  
        return view('layout.timkiem_thietbi')->with('timkiem_thietbi',$timkiem_thietbi);

    }
}
