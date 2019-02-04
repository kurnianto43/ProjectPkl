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
            $table->increments('id_tagihan');
            $table->string('nomor_dokumen', 25);
            $table->integer('id_perbaikan')->unsigned();
            $table->string('periode_perbaikan', 20);
            $table->timestamps();
            $table->foreign('id_perbaikan')->references('id_perbaikan')->on('perbaikans');
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
