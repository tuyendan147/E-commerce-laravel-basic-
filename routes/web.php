<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/' , 'PagesController@index' );

Route::get('/home' , ['as' => 'home' ,'uses' => 'PagesController@home'] );

Route::get('xem-chi-tiet-san-pham/{id}' , 'SanphamsController@xemchitiet' );

Route::get('them-vao-gio-hang/{id}' , 'GiohangsController@themgiohang');

Route::get('xoa-chi-tiet-don-hang/{id}' , 'GiohangsController@xoachitiet');

Route::post('them-don-hang' , 'GiohangsController@themdonhang');

Route::get('xem-danh-muc/{id}' , 'PagesController@xemdanhmuc' );

Route::post('timkiem' , 'PagesController@timkiem');

Auth::routes();


Route::get('/admin' , ['as' => 'admin' ,'uses' => 'PagesController@admin'] );

Route::get('them-san-pham' , 'SanphamsController@themsanpham' );

Route::post('add-san-pham' , 'SanphamsController@addsanpham' );

Route::get('xem-san-pham' , 'SanphamsController@xemsanpham' );

Route::get('xoa-san-pham/{id}' , 'SanphamsController@xoasanpham' );

Route::get('sua-san-pham/{id}' , 'SanphamsController@suasanpham' );

Route::post('edit-san-pham/{id}' , 'SanphamsController@editsanpham' );
