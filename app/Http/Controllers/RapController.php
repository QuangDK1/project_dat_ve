<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

use Illuminate\Support\Facades\Redirect;
session_start();
class RapController extends Controller
{
    public function add_Rap(){
        return view('/admin.AddRap');
    }
    public function all_Rap(){
        $all_Rap=DB::table('rapchieuphim')->get();
        $manager_Rap=view('/rap')->with('/rap',$all_Rap);
        return view('rap')->with('all_Rap',$all_Rap);
    }
    public function save_Rap(Request $request){
        $data =array();
        $data['IDRap']=$request->IDRap;
        $data['TenRap']=$request->TenRap;
        DB::table('rapchieuphim')->insert($data);
        Session::put('message','Thêm thành công');
        return Redirect::to('rap');
    }
}
