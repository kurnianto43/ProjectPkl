<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJenisMasalahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenis_masalahs', function (Blueprint $table) {
            $table->increments('id_jenis_masalah');
            $table->string('kode_jenis_masalah', 5);
            $table->string('keterangan_jenis_masalah', 100);
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
        Schema::dropIfExists('jenis_masalahs');
    }
}
