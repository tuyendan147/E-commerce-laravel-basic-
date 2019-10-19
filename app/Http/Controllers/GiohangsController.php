<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;
use App\chi_tiet_don_hang;
use App\don_hang;
class GiohangsController extends Controller
{
    public function themgiohang($id){

    	$sanpham = DB::table('san_pham')->where('id',$id)->first();
        Cart::add(['id' => $sanpham->id, 'name' => $sanpham->tensanpham, 'qty' => 1, 'price' => $sanpham->gia,'options' => ['img' => $sanpham->anh]]);

        return view ('front-end.cart' );
    }
    public function xoachitiet($id){

    	Cart::remove($id);
    	return view ('front-end.cart' );
    }

    public function themdonhang(Request $request){


    	$oder = new don_hang();
        $total =0;
        foreach (Cart::content() as $row) {
            $total = $total + ( $row->qty * $row->price);
        }
        $oder->HoTen = $request->HoTen;
        $oder->SDT = $request->SDT;
        $oder->DiaChi = $request->DiaChi;
        $oder->TongTien =  floatval($total);
        $oder->save();
        $o_id =$oder->id;

        foreach (Cart::content() as $row) {
           $detail = new chi_tiet_don_hang();
           $detail->id_sanpham = $row->id;
           $detail->soluong = $row->qty;
           $detail->id_donhang = $o_id;
           $detail->save();
        }
        Cart::destroy();   

        return redirect()->route('home');
    }
}
