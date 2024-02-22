<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function trang_chu(){
        return Redirect::to('/');
    }

    public function dang_nhap(Request $request){
        $Username = $request->Username;
        $Password = $request ->Password;
        $result= DB::table('khachhang')->where('Username',$Username)->where('Password',$Password)->get();
        if(count($result)>0){
            Session::put('data_admin',$result[0]);
            return Redirect::to('/');
        }else{
            Session::put('data_admin',"");
            Session::put('message','Tài khoản hoặc mật khẩu sai');
            return Redirect::to('/');
        }
    }
    public function logout(){
        Session::put('TenKH',"");
        Session::put('data_admin',"");
        return Redirect::to('/');
    }
}
