<?php

namespace App\Http\Controllers;
use App\Http\Controllers\DonhangController;
use Illuminate\Http\Request;

use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class DonhangController extends Controller
{
    public function all_donhang(){

       $all_donhang = DB::table('donhang')->get();
       $manager_donhang = view('admin.all_donhang')->with('all_donhang',$all_donhang);

        return view('admin.dashboard')->with('admin.all_donhang', $manager_donhang);
    }

    public function delete_donhang($id_donhang){
      DB::table('donhang')->where('id_donhang',$id_donhang)->delete();
      Session::put('message','Xoá đon hàng thành công');
         return Redirect::to('all-donhang');


    }


     public function save_donhang(Request $request){
        $data = array();
        $data['name'] = $request->name;
        $data['phone'] = $request->phone;
        $data['name_sp'] = $request->name_sp;
        $data['add'] = $request->add;
       
            DB::table('donhang')->insert($data);
            // Session::put('message','Đặt hàng thành công');
            return Redirect::to('trang-chu');


        //     $data = array();
        // $data['user_name'] = $request->user_name;
        // $data['dv_name'] = $request->dv_name;
        // $data['phone'] = $request->phone;
        // $data['date'] = $request->date;

        // DB::table('lichhen')->insert($data);    
        //  Session::put('message','Bạn đã đặt lịch thành công. Chúng tôi sẽ gọi lại cho bạn sau!');
        //  return Redirect:: to('trang-chu');

    }

}
