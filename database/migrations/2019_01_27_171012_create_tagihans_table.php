<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagihansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tagihans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomor_dokumen_tagihan', 20)->unique();
            $table->integer('id_perbaikan')->unsigned();
            $table->string('periode_tagihan');
            $table->integer('user_id')->unsigned();
            $table->timestamps();
            $table->foreign('id_perbaikan')->references('id_perbaikan')->on('perbaikans');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tagihans');
    }
}
