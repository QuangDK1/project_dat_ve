<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

use Illuminate\Support\Facades\Redirect;
session_start();
class RoomController extends Controller
{
    public function add_Room(){
        return view('/admin.AddRoom');
    }
    public function all_Room(){
        $all_Room=DB::table('phongchieu')->get();
        $manager_Room=view('/movieRoom')->with('/movieRoom',$all_Room);
        return view('movieRoom')->with('all_Room',$all_Room);
    }
    public function save_Room(Request $request){
        $data =array();
        $data['IDPhongChieu']=$request->IDPhongChieu;
        $data['TenPhong']=$request->TenPhong;
        DB::table('phongchieu')->insert($data);
        Session::put('message','Thêm phòng chiếu   thành công');
        return Redirect::to('movieRoom');
    }
    public function edit_SuatChieu($IDPhongChieu){
        $edit_Room=DB::table('phongchieu')->where('IDPhongChieu',$IDPhongChieu)->get();
        $manager_Room=view('/admin.EditRoom')->with('/admin.EditRoom',$edit_Room);
        return view('admin.EditRoom')->with('edit_Room',$edit_Room);
    }
    



    public function update_Room(Request $request){
        $data =array();
        $data['IDPhongChieu']=$request->IDPhongChieu;
        $data['TenPhong']=$request->TenPhong;
        DB::table('phongchieu')->where('IDPhongChieu',$request->IDPhongChieu)->update($data);
        Session::put('message','Cập nhật phòng chiếu thành công');
        return Redirect::to('movieRoom');
    }
    public function delete_Room($IDPhongChieu){
        DB::table('phongchieu')->where('IDPhongChieu',$IDPhongChieu)->delete();
        Session::put('message','Xóa phòngchiếu thành công');
        return Redirect::to('movieRoom');
    }
}