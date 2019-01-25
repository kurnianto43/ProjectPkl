<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipePekerjaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipe_pekerjaans', function (Blueprint $table) {
            $table->increments('id_tipe_pekerjaan');
            $table->string('kode_tipe_pekerjaan', 10);
            $table->string('keterangan_tipe_pekerjaan', 100);
            $table->integer('tarif');
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
        Schema::dropIfExists('tipe_pekerjaans');
    }
}
