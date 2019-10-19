<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChiTietDonHangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chi_tiet_don_hang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_sanpham');

            $table->string('soluong');
            $table->integer('id_donhang')->unsigned();
            $table->foreign('id_donhang')->references('id')->on('don_hang')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
