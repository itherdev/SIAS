<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddJmlBukuToOpnameBukuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('opname_buku', function (Blueprint $table) {
            $table->string('uraian')->after('kategori_buku');
            $table->string('jml_buku')->after('uraian');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('opname_buku', function (Blueprint $table) {
            $table->dropColumn('uraian');
            $table->dropColumn('jml_buku');
        });
    }
}
