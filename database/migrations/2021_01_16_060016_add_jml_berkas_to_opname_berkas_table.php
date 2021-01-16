<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddJmlBerkasToOpnameBerkasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('opname_berkas', function (Blueprint $table) {
            $table->string('jml_berkasada')->after('jml_berkas');
            $table->string('jml_berkastidakada')->after('jml_berkasada');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('opname_berkas', function (Blueprint $table) {
            $table->dropColumn('jml_berkasada');
            $table->dropColumn('jml_berkastidakada');
        });
    }
}
