<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

use Illuminate\Support\Facades\Redirect;
session_start();
class CategoryController extends Controller
{
    public function add_Category(){
        return view('/admin.movieAddCategory');
    }
    public function all_Category(){
        $all_Category=DB::table('theloai')->get();
        $manager_Category=view('/movieCategory')->with('/movieCategory',$all_Category);
        return view('movieCategory')->with('all_Category',$all_Category);
    }
    public function save_Category(Request $request){
        $data =array();
        $data['IDTheLoai']=$request->IDTheLoai;
        $data['TenTheLoai']=$request->TenTheLoai;
        DB::table('theloai')->insert($data);
        Session::put('message','Thêm thể loại thành công');
        return Redirect::to('movieCategory');
    }
    public function edit_Category($IDTheLoai){
        $edit_Category=DB::table('theloai')->where('IDTheLoai',$IDTheLoai)->get();
        $manager_User=view('/admin.movieEditCategory')->with('/admin.movieEditCategory',$edit_Category);
        return view('admin.movieEditCategory')->with('edit_Category',$edit_Category);
    }
    



    public function update_Category(Request $request){
        $data =array();
        $data['IDTheLoai']=$request->IDTheLoai;
        $data['TenTheLoai']=$request->TenTheLoai;
        DB::table('theloai')->where('IDTheLoai',$request->IDTheLoai)->update($data);
        Session::put('message','Cập nhật thể loại thành công');
        return Redirect::to('movieCategory');
    }
    public function delete_Category($IDTheloai){
        DB::table('theloai')->where('IDTheLoai',$IDTheloai)->delete();
        Session::put('message','Xóa thể loại thành công');
        return Redirect::to('movieCategory');
    }
}