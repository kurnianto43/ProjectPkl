<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSukucadangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sukucadangs', function (Blueprint $table) {
            $table->increments('id_sukucadang');
            $table->string('nomor_sukucadang', 5)->unique();
            $table->string('nama_sukucadang', 35);
            $table->integer('stok');
            $table->integer('id_kategori_sukucadang')->unsigned();
            $table->timestamps();
            $table->foreign('id_kategori_sukucadang')->references('id_kategori_sukucadang')->on('kategori_sukucadangs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sukucadangs');
    }
}
