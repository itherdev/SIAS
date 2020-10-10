<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataArsipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_arsip', function (Blueprint $table) {
            $table->id();
            $table->string('kode_klarifikasi', 10)->unique();
            $table->string('no_register', 10)->unique();
            $table->year('tahun');
            $table->string('jenis_arsip');
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
        Schema::dropIfExists('data_arsip');
    }
}
