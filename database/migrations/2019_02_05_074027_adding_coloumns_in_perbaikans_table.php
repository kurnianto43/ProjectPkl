<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddingColoumnsInPerbaikansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('perbaikans', function (Blueprint $table) {
            $table->integer('id_tagihan')->unsigned()->after('nomor_dokumen_perbaikan');

            $table->foreign('id_tagihan')->references('id_tagihan')->on('tagihans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('perbaikans', function (Blueprint $table) {
            //
        });
    }
}
