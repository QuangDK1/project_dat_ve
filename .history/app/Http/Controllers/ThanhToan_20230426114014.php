<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

use Illuminate\Support\Facades\Redirect;
session_start();
class ThanhToanController extends Controller
{
    public function add_ThanhToan(){
        return view('/');
    }
    public function all_ThanhToan(){
        $all_ThanhToan=DB::table('hoadon')->get();
        $manager_Category=view('/HoaDon')->with('/HoaDon',$all_ThanhToan);
        return view('HoaDon')->with('all_ThanhToan',$all_ThanhToan);
    }
    public function save_ThanhToan(Request $request){
        $data =array();
        $data['IDTheLoai']=$request->IDTheLoai;
        $data['TenTheLoai']=$request->TenTheLoai;
        DB::table('theloai')->insert($data);
        Session::put('message','Thêm thể loại thành công');
        return Redirect::to('movieCategory');
    }

}