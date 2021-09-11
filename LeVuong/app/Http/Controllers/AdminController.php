<?php

namespace App\Http\Controllers;
use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class AdminController extends Controller
{
     public function login(){
        return view('admin.login_admin');
    }

    public function dashboard(){
        return view('admin.dashboard');
    }
    public function logina(Request $request){
       $email = $request->email;
        $password = md5($request->password);

        $result = DB::table('admin')->where('email',$email)->where('password',$password)->first();
        return view('admin.dashboard');

    }

}
