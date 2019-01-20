<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeknisisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teknisis', function (Blueprint $table) {
            $table->increments('id_teknisi');
            $table->string('kode_teknisi', 5)->unique();
            $table->integer('id_karyawan')->unsigned();
            $table->timestamps();
            $table->foreign('id_karyawan')->references('id_karyawan')->on('karyawans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teknisis');
    }
}
