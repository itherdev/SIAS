<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameColumUraianBerkas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pengembalian_berkas', function (Blueprint $table) {
            $table->renameColumn('uraian_berkas', 'jenis_arsip');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pengembalian_berkas', function (Blueprint $table) {
            $table->renameColumn('uraian_berkas', 'jenis_arsip');
        });
    }
}
