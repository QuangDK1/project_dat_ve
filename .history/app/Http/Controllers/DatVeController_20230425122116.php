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
session_start();
class DatVeController extends Controller
{
 
    public function add_DatVe(){
        $Theloai = Theloai::all();
        $Movie = Movie::all();
        $Suatchieu = SuatChieu::all();
        $Rap = Rap::all();
        
 
    }   
 
}