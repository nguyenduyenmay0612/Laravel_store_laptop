<?php

namespace App\Http\Controllers;
use App\Http\Controllers\LaptopController;
use Illuminate\Http\Request;

use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class LaptopController extends Controller
{
    public function add_laptop(){
        return view('admin.add_laptop');

    }

    public function all_laptop(){

       $all_laptop = DB::table('laptop')->get();
       $manager_laptop = view('admin.all_laptop')->with('all_laptop',$all_laptop);

        return view('admin.dashboard')->with('admin.all_laptop', $manager_laptop);
    }

     public function save_laptop(Request $request){
        $data = array();
        $data['ten_laptop'] = $request->ten_laptop;
        $data['gia_laptop'] = $request->gia_laptop;
        $data['mota_laptop'] = $request->mota_laptop;
       $data['anh_laptop'] = $request->anh_laptop;
        $get_anh= $request->file('anh_laptop');
        if($get_anh){
         $get_tenanh = $get_anh->getClientOriginalName();
            $tenanh = current(explode('.',$get_tenanh)); 
            $new_anh = $tenanh.rand(0,99).'.'.$get_anh->getClientOriginalExtension();
            $get_anh->move('public/upload/sanpham',$new_anh);
            $data['anh_laptop'] = $new_anh;
            DB::table('laptop')->insert($data);
            Session::put('message','Thêm sản phẩm thành công');
            return Redirect::to('all-laptop');
        }
        DB::table('laptop')->insert($data);
            Session::put('message','Thêm sản phẩm thành công');
            return Redirect::to('all-laptop');

    }
    public function edit_laptop($id_laptop){

       $edit_laptop = DB::table('laptop')->where('id_laptop',$id_laptop)->get();
       $manager_laptop = view('admin.edit_laptop')->with('edit_laptop',$edit_laptop);

        return view('admin.dashboard')->with('admin.edit_laptop', $manager_laptop);

    }
    public function update_laptop(Request $request,$id_laptop){
        $data=array();
         $data['ten_laptop'] = $request->ten_laptop;
        $data['gia_laptop'] = $request->gia_laptop;
        $data['mota_laptop'] = $request->mota_laptop;
       $get_anh = $request ->file('anh_laptop');

          if($get_anh){
            $get_tenanh = $get_anh->getClientOriginalName();
            $tenanh = current(explode('.',$get_tenanh)); 
            $new_anh = $tenanh.rand(0,99).'.'.$get_anh->getClientOriginalExtension();
            $get_anh->move('public/upload/sanpham',$new_anh);
            $data['anh_laptop'] = $new_anh;
        DB::table('laptop')->where('id_laptop',$id_laptop)->update($data);
        Session::put('message','Cập nhật sản phẩm thành công');
         return Redirect::to('all-laptop');
    }
        DB::table('laptop')->where('id_laptop',$id_laptop)->update($data);
        Session::put('message','Cập nhật sản phẩm thành công');
         return Redirect::to('all-laptop');
 }
    public function delete_laptop($id_laptop){
      DB::table('laptop')->where('id_laptop',$id_laptop)->delete();
      Session::put('message','Xoá Laptop thành công');
         return Redirect::to('all-laptop');
    }


     public function timkiem_laptop(Request $request){
        $keyword = $request->key;
        // $all_category_product = DB::table('sanpham1')->orderby('sp_ID','desc')->get();
        $timkiem_laptop = DB::table('laptop')->where('ten_laptop','like','%'.$keyword.'%')
                                             ->orwhere('gia_laptop',$keyword)->get();  
        return view('layout.timkiem_laptop')->with('timkiem_laptop',$timkiem_laptop);

    }
}
