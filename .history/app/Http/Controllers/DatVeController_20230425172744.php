<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Rap;
use App\Models\SuatChieu;
use App\Models\Theloai;
use Illuminate\Http\Request;
use DB;
use Session;
 

use Illuminate\Support\Facades\Redirect;
 
class DatVeController extends Controller
{
 
    public function ticket(){
        $theloai = Theloai::all();
        $movie = Movie::all();
        $suatchieu = SuatChieu::all();
        $rap = Rap::all();
        return view('/ticket',compact('Theloai','Movie','SuatChieu','Rap'));
 
    }   
 
}