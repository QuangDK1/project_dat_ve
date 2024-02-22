<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

use Illuminate\Support\Facades\Redirect;
session_start();
class ChairController extends Controller
{
    public function add_Chair(){
        return view('/admin.AddChair');
    }
    public function all_Chair(){
        $all_Chair=DB::table('ghe')->get();
        $manager_Chair=view('/chair')->with('/chair',$all_Chair);
        return view('chair')->with('all_Chair',$all_Chair);
    }
    public function save_Chair(Request $request){
        $data =array();
        $data['IDGhe']=$request->IDGhe;
        $data['HangGhe']=$request->HangGhe;
        $data['SoGhe']=$request->SoGhe;
        DB::table('ghe')->insert($data);
        Session::put('message','Thêm thành công');
        return Redirect::to('chair');
    }
    
    public function delete_Chair($IDGhe){
        DB::table('ghe')->where('IDGhe',$IDGhe)->delete();
        Session::put('message','Xóa thành công');
        return Redirect::to('chair');
    }
}
