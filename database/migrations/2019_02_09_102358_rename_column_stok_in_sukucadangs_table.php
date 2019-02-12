<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameColumnStokInSukucadangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sukucadangs', function (Blueprint $table) {
            $table->renameColumn('stok', 'stok_tersedia');
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
             $table->renameColumn('stok', 'stok_tersedia');
        });
    }
}
