<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

use Illuminate\Support\Facades\Redirect;
session_start();
class AdminController extends Controller
{
    public function index(){
        return view('/movieLoginAdmin');
    }
    public function show_dashboard(){
        return view('/movieAdmin');
    }
    public function dashboard(Request $request){
        $email = $request->email;
        $password = md5($request ->password);
        $result= DB::table('admin')->where('email',$email)->where('password',$password)->get();
        if(count($result)>0){
            Session::put('data_admin',$result[0]);
            return Redirect::to('/movieAdmin');
        }else{
            Session::put('message','Tài khoản hoặc mật khẩu sai');
            return Redirect::to('/admin');
        }
    }

    public function logout(){
        Session::put('data_admin',"");
        return Redirect::to('/admin');
    }
}
