<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

use Illuminate\Support\Facades\Redirect;
session_start();
class UserController extends Controller
{
    public function add_User(){
        return view('/admin.movieAddUser');
    }
    public function all_User(){
        $all_User=DB::table('khachhang')->get();
        $manager_User=view('/movieUser')->with('/movieUser',$all_User);
        return view('movieUser')->with('all_User',$all_User);
    }
    public function save_User(Request $request){
        $data =array();
        $data['TenKH']=$request->TenKH;
        $data['Username']=$request->Username;
        $data['Password']=$request->Password;
        DB::table('khachhang')->insert($data);
        Session::put('message','Thêm khách hàng thành công');
        return Redirect::to('movieUser');
    }
    public function edit_User($IDKH){
        $edit_User=DB::table('khachhang')->where('IDKH',$IDKH)->get();
        $manager_User=view('/admin.movieEditUser')->with('/admin.movieEditUser',$edit_User);
        return view('admin.movieEditUser')->with('edit_User',$edit_User);
    }
    

    public function insert_User(){
        return view('index');
    }
    
    public function register(Request $request){
        $data =array();
        $data['TenKH']=$request->TenKH;
        $data['Username']=$request->Username;
        $data['Password']=$request->Password;
        DB::table('khachhang')->insert($data);
        return Redirect::to('/');
    }

    public function update_User(Request $request){
        $data =array();
        $data['TenKH']=$request->TenKH;
        $data['Username']=$request->Username;
        $data['Password']=$request->Password;
        DB::table('khachhang')->where('IDKH',$request->IDKH)->update($data);
        Session::put('message','Cập nhật khách hàng thành công');
        return Redirect::to('movieUser');
    }
    public function delete_User($IDKH){
        DB::table('khachhang')->where('IDKH',$IDKH)->delete();
        Session::put('message','Xóa khách hàng thành công');
        return Redirect::to('movieUser');
    }
}
