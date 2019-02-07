<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNullableInPerbaikansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('perbaikans', function (Blueprint $table) {
            $table->integer('id_sukucadang')->unsigned()->nullable()->change();
            $table->integer('jumlah_sukucadang')->nullable()->change();
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
