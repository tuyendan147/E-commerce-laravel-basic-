<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\san_pham;
class SanphamsController extends Controller
{
    public function xemchitiet($id){

    	$chitiet = DB::table('san_pham')->where('id',$id)->get();
    	

    	return view ('front-end.single' , ['chitiet' => $chitiet]);

    }

    public function themsanpham(){

    	$DanhMuc = DB::table('danh_muc')->get();

    	return view('back-end.themsanpham' , ['DanhMucs' =>$DanhMuc]);
    }

    public function addsanpham(Request $request){
    	$them = new san_pham();
    	$them->id_danhmuc = $request->TenDanhMuc;
    	$them->tensanpham = $request->TenSanPham;
    	$them->anh = $request->AnhSanPham;
    	$them->mota = $request->MoTa;
    	$them->gia = $request->GiaSanPham;
    	$them->giakhuyenmai = $request->GiaKhuyenMai;
    	$them->save();

    }

    public function xemsanpham(){
    	$xem = DB::table('san_pham')->get();

    	return view('back-end.xemsanpham', ['sanpham' => $xem]);

    }

    public function xoasanpham($id){
    	$xoa = san_pham::find($id);
    	$xoa->delete();

    	return redirect()->back();
    }

    public function suasanpham($id){
	$DanhMuc = DB::table('danh_muc')->get();
    	$sua = DB::table('san_pham')->where('id',$id)->get();

    	//dd($sua);

    	return view('back-end.suasanpham' , ['sanpham' => $sua , 'DanhMucs' =>$DanhMuc]);
    }
    public function editsanpham($id , Request $request){
    	$them = san_pham::find($id);
    	$them->id_danhmuc = $request->TenDanhMuc;
    	$them->tensanpham = $request->TenSanPham;
    	$them->anh = $request->AnhSanPham;
    	$them->mota = $request->MoTa;
    	$them->gia = $request->GiaSanPham;
    	$them->giakhuyenmai = $request->GiaKhuyenMai;
    	$them->save();
    	return redirect()->back();

    }

}
