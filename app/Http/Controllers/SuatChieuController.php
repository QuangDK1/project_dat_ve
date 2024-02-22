<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

use Illuminate\Support\Facades\Redirect;
session_start();
class SuatChieuController extends Controller
{
    public function add_SuatChieu(){
        return view('/admin.AddSuatChieu');
    }
    public function all_SuatChieu(){
        $all_SuatChieu=DB::table('suatchieu')->get();
        $manager_SuatChieu=view('/suatchieu')->with('/suatchieu',$all_SuatChieu);
        return view('suatchieu')->with('all_SuatChieu',$all_SuatChieu);
    }
    public function save_SuatChieu(Request $request){
        $data =array();
        $data['IDSuatChieu']=$request->IDSuatChieu;
        $data['ThoiGian']=$request->ThoiGian;
        DB::table('suatchieu')->insert($data);
        Session::put('message','Thêm suất chiếu  thành công');
        return Redirect::to('suatchieu');
    }
    public function edit_SuatChieu($IDSuatChieu){
        $edit_SuatChieu=DB::table('suatchieu')->where('IDSuatChieu',$IDSuatChieu)->get();
        $manager_User=view('/admin.EditSuatChieu')->with('/admin.EditSuatChieu',$edit_SuatChieu);
        return view('admin.EditSuatChieu')->with('edit_SuatChieu',$edit_SuatChieu);
    }
    



    public function update_SuatChieu(Request $request){
        $data =array();
        $data['IDSuatChieu']=$request->IDSuatChieu;
        $data['ThoiGian']=$request->ThoiGian;
        DB::table('suatchieu')->where('IDSuatChieu',$request->IDSuatChieu)->update($data);
        Session::put('message','Cập nhật suất chiếu  thành công');
        return Redirect::to('suatchieu');
    }
    public function delete_SuatChieu($IDSuatChieu){
        DB::table('suatchieu')->where('IDSuatChieu',$IDSuatChieu)->delete();
        Session::put('message','Xóa suất chiếu thành công');
        return Redirect::to('suatchieu');
    }
}