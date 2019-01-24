<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKulkasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kulkas', function (Blueprint $table) {
            $table->increments('id_kulkas');
            $table->string('nomor_asset', 7)->unique();
            $table->string('nomor_seri', 20);
            $table->date('tanggal_masuk')->nullable();
            $table->integer('id_tipe')->unsigned();
            $table->integer('id_kondisi')->unsigned();
            $table->timestamps();
            $table->foreign('id_tipe')->references('id_tipe')->on('tipes');
            $table->foreign('id_kondisi')->references('id_kondisi')->on('kondisis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kulkas');
    }
}
