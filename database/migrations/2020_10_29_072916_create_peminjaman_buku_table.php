<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamanBukuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjaman_buku', function (Blueprint $table) {
            $table->id();
            $table->string('no_buku', 10)->unique();
            $table->string('no_register');
            $table->time('tgl_pinjam');
            $table->integer('jml_buku');
            $table->string('nama_peminjam');
            $table->string('uraian');
            $table->string('unit_pengolah');
            $table->string('nama_petugas');
            $table->string('kategori_petugas');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peminjaman_buku');
    }
}
