<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpnameBukuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opname_buku', function (Blueprint $table) {
            $table->id();
            $table->string('kode_klarifikasi', 10)->unique();
            $table->string('no_buku', 10);
            $table->string('no_register', 10);
            $table->year('tahun');
            $table->enum('kategori_buku', ['Umum', 'Terlambai I', 'Terlambar  II', 'Istimewa', 'Pemutihan', 'IN', 'China']);
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
        Schema::dropIfExists('opname_buku');
    }
}
