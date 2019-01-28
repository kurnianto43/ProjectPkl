<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemuanMasalahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temuan_masalahs', function (Blueprint $table) {
            $table->increments('id_temuan_masalah');
            $table->integer('id_perbaikan')->unsigned();
            $table->integer('id_jenis_masalah')->unsigned();
            $table->timestamps();
            $table->foreign('id_perbaikan')->references('id_perbaikan')->on('perbaikans');
            $table->foreign('id_jenis_masalah')->references('id_jenis_masalah')->on('jenis_masalahs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temuan_masalahs');
    }
}
