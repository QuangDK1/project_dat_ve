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
    public function all_otherTicket(){
        $all_otherTicket=DB::table('dondatve')->get();
        $manager_Movie=view('/')->with('/movieMovie',$all_Movie);
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
        $data['KhoiChieu']=$request->KhoiChieu;
        $data['Mota']=$request->Mota;
        $data['HinhAnh']= $file_name;
        $data['Trailer']= $file_namee;
        DB::table('phim')->insert($data);
        Session::put('message','Thêm Phim thành công');
        return Redirect::to('movieMovie');
    }
 
}