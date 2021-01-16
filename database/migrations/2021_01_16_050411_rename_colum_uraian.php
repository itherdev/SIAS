<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameColumUraian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pengembalian_buku', function (Blueprint $table) {
            $table->renameColumn('uraian', 'jenis_arsip');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pengembalian_buku', function (Blueprint $table) {
            $table->renameColumn('jenis_arsip', 'uraian');
        });
    }
}
