<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpnameBerkasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opname_berkas', function (Blueprint $table) {
            $table->id();
            $table->string('kode_klarifikasi', 10)->unique();
            $table->string('no_berkas');
            $table->year('tahun');
            $table->enum('kategori_berkas', ['Umum', 'Terlambat I', 'Terlambat II', 'Istimewa', 'Pemutihan', 'IN', 'China']);
            $table->string('uraian_berkas');
            $table->string('jml_berkas');
            $table->string('jml_boks');
            $table->string('no_boks');
            $table->string('lokasi');
            $table->string('ket');
            $table->string('tingkat_perkembangan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opname_berkas');
    }
}
