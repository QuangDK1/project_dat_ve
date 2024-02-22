<?php

namespace App\Http\Controllers;

use App\Models\Theloai;
use Illuminate\Http\Request;
use DB;
use Session;
 

use Illuminate\Support\Facades\Redirect;
session_start();
class TicketController extends Controller
{
 
    public function add_Ticket(){
        $Theloai= Theloai::all();
        return view('/movieAddTicket',compact('Theloai'));
    }
    public function all_Ticket(){
        $all_Ticket=DB::table('phim')->get();
        $manager_Ticket=view('/movieTicket')->with('/movieTicket',$all_Ticket);
        return view('movieTicket')->with('all_Ticket',$all_Ticket);
    }
    public function save_Movie(Request $request){
        if($request ->has('HinhAnh')){
            $file =$request->HinhAnh;
            $file_name=$file->getClientOriginalName();
            $file->move(base_path('/public/images'),$file_name);
        }
        $data =array();
        $data['IDPhim']=$request->IDPhim; 
        $data['TenPhim']=$request->TenPhim;
        $data['TenTheLoai']=$request->TenTheLoai;
        $data['ThoiLuong']=$request->ThoiLuong;
        $data['NgayKhoiChieu']=$request->NgayKhoiChieu;
        $data['Mota']=$request->Mota;
        $data['HinhAnh']= $file_name;
        DB::table('phim')->insert($data);
        Session::put('message','Thêm Phim thành công');
        return Redirect::to('movieMovie');
    }
}