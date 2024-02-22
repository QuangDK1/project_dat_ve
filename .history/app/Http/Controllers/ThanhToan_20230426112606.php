<?php

namespace App\Http\Controllers;

use App\Models\Ghe;
use App\Models\Movie;
use App\Models\Rap;
use App\Models\SuatChieu;
use App\Models\Theloai;
use App\Models\User;
use App\Models\Ve;
use Illuminate\Http\Request;
use DB;
use Session;
 

use Illuminate\Support\Facades\Redirect;
 
class DatVeController extends Controller
{
 
     
 
 
    public function thanhtoan($idd)
    {
        $movie = Movie::find($idd);
        $Suatchieu = SuatChieu::all();
        $Rap = Rap::all();
        $Ghe = Ghe::all();
        $Ve = Ve::all();
        $user = User::all();
        if ($movie === null) {
            return view('errors.404');
        } else {
            return view('Donthanhtoan', [
                'movie' => $movie,
                'Suatchieu' =>$Suatchieu,
                'Rap' =>$Rap,
                'Ghe' =>$Ghe,
                'Ve' =>$Ve,
                'user' =>$user,
            ]);
        }
    }   
    public function add_donDatVe(){
        return view('/donDatVe');
    }
    public function all_donDatVe(){
        $all_donDatVe=DB::table('dondatve')->get();
        $manager_Movie=view('/donDatVe')->with('/donDatVe',$all_donDatVe);
        return view('donDatVe')->with('all_donDatVe',$all_donDatVe);
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