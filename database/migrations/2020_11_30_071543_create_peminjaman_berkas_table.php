<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamanBerkasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjaman_berkas', function (Blueprint $table) {
            $table->id();
            $table->string('no_berkas');
            $table->date('tgl_pinjam');
            $table->text('uraian_berkas');
            $table->year('tahun');
            $table->string('jml_berkas');
            $table->string('nama_peminjam');
            $table->string('unit_pengolah');
            $table->string('nama_petugas');
            $table->string('kategori_petugas');
            $table->string('status');
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
        Schema::dropIfExists('peminjaman_berkas');
    }
}
