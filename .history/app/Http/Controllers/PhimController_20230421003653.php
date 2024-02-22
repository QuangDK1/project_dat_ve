<?php

namespace App\Http\Controllers;

use App\Models\Theloai;
use Illuminate\Http\Request;
use DB;
use Session;
 

use Illuminate\Support\Facades\Redirect;
session_start();
class PhimController extends Controller
{
    public function add (){
        $Theloai= Theloai::all();
        return view('/admin.movieAddMovie',compact('Theloai')) ;
    }
    public function add_Movie(){
        return view('/admin.movieAddMovie');
    }
    public function all_Movie(){
        $all_Movie=DB::table('phim')->get();
        $manager_Movie=view('/movieMovie')->with('/movieMovie',$all_Movie);
        return view('movieMovie')->with('all_Movie',$all_Movie);
    }
    public function save_Movie(Request $request){
        $data =array();
        $data['IDPhim']=$request->IDPhim;
        $data['TenTheLoai']=$request->TenTheLoai;
        $data['IDPhim']=$request->IDPhim;
        $data['ThoiLuong']=$request->ThoiLuong;
        $data['Mota']=$request->Mota;
        $data['HinhAnh']=$request->HinhAnh;
        DB::table('phim')->insert($data);
        Session::put('message','Thêm Phim thành công');
        return Redirect::to('movieMovie');
    }
}