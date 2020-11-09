<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratMasukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_masuk', function (Blueprint $table) {
            $table->id();
            $table->string('no_agenda', 20)->unique();
            $table->string('no_surat', 25);
            $table->date('tgl_surat');
            $table->date('tgl_terima');
            $table->string('sumber_surat', 100);
            $table->string('perihal', 100);
            $table->string('keterangan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surat_masuk');
    }
}
