<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LikeFuckedUp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('like');

        Schema::create('like', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idUser')->unsigned();
            $table->integer('idReview')->unsigned();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('idUser')
                        ->references('id')
                        ->on('user');    
            $table->foreign('idReview')
                        ->references('id')
                        ->on('review');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('like');        

        Schema::create('like', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idUser')->unsigned();
            $table->integer('idPeli')->unsigned();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('idUser')
                        ->references('id')
                        ->on('user');    
            $table->foreign('idPeli')
                        ->references('id')
                        ->on('pelicula');
        });
    }
}
