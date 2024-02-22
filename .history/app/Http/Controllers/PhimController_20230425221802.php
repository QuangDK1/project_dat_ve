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
 
    public function add_Movie(){
        $Theloai= Theloai::all();
        return view('/admin.movieAddMovie',compact('Theloai'));
    }
    public function all_Movie(){
        $all_Movie=DB::table('phim')->get();
        $manager_Movie=view('/movieMovie')->with('/movieMovie',$all_Movie);
        return view('movieMovie')->with('all_Movie',$all_Movie);
    }
    public function save_Movie(Request $request){
        if($request ->has('HinhAnh')){
            $file =$request->HinhAnh;
            $file_name=$file->getClientOriginalName();
            $file->move(base_path('/public/images'),$file_name);
        }
        if($request ->has('Trailer')){
            $file =$request->Trailer;
            $file_namee=$file->getClientOriginalName();
            $file->move(base_path('/public/trailer'),$file_namee);
        }
        $data =array();
        $data['IDPhim']=$request->IDPhim; 
        $data['TenPhim']=$request->TenPhim;
        $data['TenTheLoai']=$request->TenTheLoai;
        $data['ThoiLuong']=$request->ThoiLuong;
        $data['KhoiChieu']=$request->NgayKhoiChieu;
        $data['Mota']=$request->Mota;
        $data['HinhAnh']= $file_name;
        $data['Trailer']= $file_namee;
        DB::table('phim')->insert($data);
        Session::put('message','Thêm Phim thành công');
        return Redirect::to('movieMovie');
    }
}