<?php

namespace App\Http\Controllers;

use App\Models\Ghe;
use App\Models\Movie;
use App\Models\Rap;
use App\Models\SuatChieu;
use App\Models\Theloai;
use App\Models\Ve;
use Illuminate\Http\Request;
use DB;
use Session;
 

use Illuminate\Support\Facades\Redirect;
 
class DatVeController extends Controller
{
 
     
 
 
    public function ticket($idd)
    {
        $movie = Movie::find($idd);
        $Suatchieu = SuatChieu::all();
        $Rap = Rap::all();
        $Ghe = Ghe::all();
        $Ve = Ve::all();
        if ($movie === null) {
            return view('errors.404');
        } else {
            return view('ticket', [
                'movie' => $movie,
                'Suatchieu' =>$Suatchieu,
                'Rap' =>$Rap,
                'Ghe' =>$Ghe,
                'Ve' =>$Ve,
            ]);
        }
    }   
    public function add_donDatVe(){
        return view('/');
    }
    public function all_donDatVe(){
       // $all_donDatVe=DB::table('dondatve')->get();
        //$manager_DatVe=view('/donDatVe')->with('/donDatVe',$all_donDatVe);
        dd(1);
        //return view('donDatVe')->with('all_donDatVe',$all_donDatVe);

    }
    public function dondatve(Request $request){
        $data =array();
        $data['TenRap']=$request->TenRap;
        $data['ThoiGian']=$request->ThoiGian;
        $data['SoGhe']=$request->SoGhe;
        $data['HangGhe']=$request->HangGhe;
        $data['NgayXem']=$request->NgayXem;
 
        DB::table('dondatve')->insert($data);
  
        return view('Donthanhtoan');
    }
    
    public function save_donDatVe(Request $request){
 
 
        $data =array();
        $data['IDDonDatVe']=$request->IDDonDatVe; 
        $data['TenPhim']=$request->TenPhim;
        $data['TenTheLoai']=$request->TenTheLoai;
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