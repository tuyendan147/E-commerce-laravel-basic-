<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PagesController extends Controller
{
    public function index(){

    	$hangnhabep = DB::table('san_pham')->where('id_danhmuc',1)->paginate(3);
    	$doan = DB::table('san_pham')->where('id_danhmuc',2)->paginate(3);
    	$mi = DB::table('san_pham')->where('id_danhmuc',3)->paginate(3);

    	return view ( 'front-end.index' , [ 'hangnhabeprangoai' => $hangnhabep , 'doan' =>$doan  , 'mi' =>$mi]);
    }

    public function home(){

		$hangnhabep = DB::table('san_pham')->where('id_danhmuc',1)->paginate(3);
        $doan = DB::table('san_pham')->where('id_danhmuc',2)->paginate(3);
        $mi = DB::table('san_pham')->where('id_danhmuc',3)->paginate(3);

        return view ( 'front-end.index' , [ 'hangnhabeprangoai' => $hangnhabep , 'doan' =>$doan  , 'mi' =>$mi]);
    }

    public function admin(){

    	return view('back-end.index');
    }

    public function xemdanhmuc($id){
    	$DanhMucs = DB::table('san_pham')->where('id_danhmuc', $id)->get();

    	//dd($DanhMucs);

    	return view('front-end.danhmuc', [ 'DanhMucs' => $DanhMucs ]);
    }

    public function timkiem(Request $request){

        $timkiem = DB::table('san_pham')
                ->where('tensanpham', 'like', '%'.$request->Search.'%')
                ->get();
                
                return view('front-end.danhmuc', [ 'DanhMucs' => $timkiem ]);
    }
}
