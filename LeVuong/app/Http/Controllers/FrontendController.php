<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// use DB;
// use App\Http\Requests;
// use Session;
// use Illuminate\Support\Facades\Redirect;
// use App\Product;
// session_start();


namespace App\Http\Controllers;
use App\Http\Controllers\FrontendController; 

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
use App\Product;
session_start();


class FrontendController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function lienhe(){
        return view('layout.lienhe');
    }

    public function laptop(){
        $all_laptop = DB::table('laptop')->orderby('id_laptop')->get();
        return view('layout.laptop')->with('all_laptop',$all_laptop);
    }

     public function thietbi(){
        $all_thietbi = DB::table('thietbi')->orderby('id_thietbi')->get();
        return view('layout.thietbi')->with('all_thietbi',$all_thietbi);
    }

     public function camera(){
        $all_camera = DB::table('camera')->orderby('id_camera')->get();
        return view('layout.camera')->with('all_camera',$all_camera);
    }

}

