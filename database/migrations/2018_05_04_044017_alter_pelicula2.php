<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterPelicula2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pelicula', function (Blueprint $table) {
            $table->dropColumn('originalExtention');
            $table->string('portadaExt',10);
            $table->string('bannerExt',10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pelicula', function (Blueprint $table) {
            $table->dropColumn('portadaExt');
            $table->dropColumn('bannerExt');
            $table->string('originalExtention',10);
        });
    }
}
