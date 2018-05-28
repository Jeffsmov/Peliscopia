<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SoftDeletes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('pelicula', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('review', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('trailer', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('comentario', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('like', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('score', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('favorito', function (Blueprint $table) {
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user', function (Blueprint $table) {
            //$table->softDeletes();
        });

        Schema::table('pelicula', function (Blueprint $table) {
            //$table->softDeletes();
        });

        Schema::table('review', function (Blueprint $table) {
            //$table->softDeletes();
        });

        Schema::table('trailer', function (Blueprint $table) {
            //$table->softDeletes();
        });

        Schema::table('comentario', function (Blueprint $table) {
            //$table->softDeletes();
        });

        Schema::table('like', function (Blueprint $table) {
            //$table->softDeletes();
        });

        Schema::table('score', function (Blueprint $table) {
            //$table->softDeletes();
        });

        Schema::table('favorito', function (Blueprint $table) {
            //$table->softDeletes();
        });
    }
}
