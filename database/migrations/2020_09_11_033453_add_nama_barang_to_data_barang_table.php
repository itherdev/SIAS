<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNamaBarangToDataBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_barang', function (Blueprint $table) {
            $table->string('nama_barang', 100)->after('kode_barang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_barang', function (Blueprint $table) {
            $table->dropColumn('nama_barang');
        });
    }
}
