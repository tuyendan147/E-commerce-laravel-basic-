<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSanPhamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('san_pham', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tensanpham');
            $table->string('anh');
            $table->string('mota');
            $table->string('gia');
            $table->string('giakhuyenmai')->nullable();
            $table->integer('id_danhmuc')->unsigned();
            $table->foreign('id_danhmuc')->references('id')->on('danh_muc')->onDelete('cascade');
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
