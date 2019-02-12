<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnStokMinimalInSukucadangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sukucadangs', function (Blueprint $table) {
            $table->integer('stok_minimal')->after('nama_sukucadang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sukucadangs', function (Blueprint $table) {
            $table->integer('stok_minimal')->after('nama_sukucadang');
        });
    }
}
