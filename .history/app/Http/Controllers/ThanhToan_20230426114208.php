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
    public function ThanhToan(Request $request){
 
 
        $data =array();
        $data['TenKH']=$request->TenKH;
        $data['Email']=$request->Email;
        $data['HTTT']=$request->HTTT;
 
 
        DB::table('dondatve')->insert($data);
  
        return view('Donthanhtoan');
    }
    public function save_donDatVe(Request $request){
 
 
        $data =array();
        $data['IDDonDatVe']=$request->IDDonDatVe; 
 
        $data['TenRap']=$request->TenRap;
        $data['ThoiGian']=$request->ThoiGian;
        $data['SoGhe']=$request->SoGhe;
        $data['HangGhe']=$request->HangGhe;
        $data['NgayXem']=$request->NgayXem;
 
        DB::table('dondatve')->insert($data);
  
        return view('Donthanhtoan' );
    }
     
 
    public function insert_Ve(){
        return view('Donthanhtoan');
    }
}