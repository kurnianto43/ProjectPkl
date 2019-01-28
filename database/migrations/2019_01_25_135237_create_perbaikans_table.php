<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerbaikansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perbaikans', function (Blueprint $table) {
            $table->increments('id_perbaikan');
            $table->string('nomor_dokumen', 20)->unique();
            $table->integer('id_teknisi')->unsigned();
            $table->integer('id_kulkas')->unsigned();
            $table->integer('id_tipe_pekerjaan')->unsigned();
            $table->string('temuan_masalah');
            $table->integer('id_sukucadang')->unsigned();
            $table->integer('jumlah_sukucadang');
            $table->date('tanggal_perbaikan');
            $table->timestamps();
            $table->foreign('id_teknisi')->references('id_teknisi')->on('teknisis');
            $table->foreign('id_kulkas')->references('id_kulkas')->on('kulkas');
            $table->foreign('id_tipe_pekerjaan')->references('id_tipe_pekerjaan')->on('tipe_pekerjaans');
            $table->foreign('id_sukucadang')->references('id_sukucadang')->on('sukucadangs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perbaikans');
    }
}
