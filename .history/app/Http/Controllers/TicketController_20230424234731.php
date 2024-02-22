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
        $Theloaii= Theloai::all();
        return view('/movieAddTicket',compact('Theloai'));
    }   
    public function all_Ticket(){
        $all_Ticket=DB::table('ve')->get();
        $manager_Ticket=view('/movieTicket')->with('/movieTicket',$all_Ticket);
        return view('movieTicket')->with('all_Ticket',$all_Ticket);
    }
    public function save_Ticket(Request $request){
        $data =array();
        $data['IDVe']=$request->IDVe; 
        $data['GiaVe']=$request->GiaVe;
        $data['TenPhim']=$request->TenPhim;
        $data['TenRap']=$request->TenRap;
        $data['TenTheLoai']=$request->TenTheLoai;
        $data['ThoiGian']=$request->ThoiGian;
        DB::table('ve')->insert($data);
        Session::put('message','Thêm vé thành công');
        return Redirect::to('movieTicket');
    }
}