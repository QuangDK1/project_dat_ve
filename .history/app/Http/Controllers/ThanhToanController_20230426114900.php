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
 
    public function ThanhToan(Request $request){
 
 
        $data =array();
        $data['IDHoaDon']=$request->IDDonDatVe; 
        $data['TenKH']=$request->TenKH;
        $data['Email']=$request->Email;
        $data['HTTT']=$request->HTTT;
 
 
        DB::table('hoadon')->insert($data);
  
        return view('HoaDon');
    }
    public function save_ThanhToan(Request $request){
 
 
        $data =array();
        $data['IDHoaDon']=$request->IDDonDatVe; 
 
        $data['TenKH']=$request->TenKH;
        $data['Email']=$request->Email;
        $data['HTTT']=$request->HTTT;
 
        DB::table('hoadon')->insert($data);
  
        return view('HoaDon' );
    }
     
 
    public function insert_Ve(){
        return view('HoaDon');
    }
}