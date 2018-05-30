<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LikeId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('like');
        Schema::dropIfExists('score');
        Schema::dropIfExists('favorito');

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

        Schema::create('favorito', function (Blueprint $table) {
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

        Schema::create('score', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('score');
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

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('like');
        Schema::dropIfExists('score');
        Schema::dropIfExists('favorito');
        
        Schema::create('favorito', function (Blueprint $table) {
            $table->integer('idUser')->unsigned();
            $table->integer('idPeli')->unsigned();
            $table->timestamps();
            
            $table->primary(['idUser', 'idPeli']);

            $table->foreign('idUser')
                        ->references('id')
                        ->on('user');    
            $table->foreign('idPeli')
                        ->references('id')
                        ->on('pelicula');
        });

        Schema::create('score', function (Blueprint $table) {
            $table->integer('idUser')->unsigned();
            $table->integer('idPeli')->unsigned();
            $table->integer('score');
            $table->timestamps();
            
            $table->primary(['idUser', 'idPeli']);

            $table->foreign('idUser')
                        ->references('id')
                        ->on('user');    
            $table->foreign('idPeli')
                        ->references('id')
                        ->on('pelicula');
        });

        Schema::create('like', function (Blueprint $table) {
            $table->integer('idUser')->unsigned();
            $table->integer('idReview')->unsigned();
            $table->timestamps();
            
            $table->primary(['idUser', 'idReview']);

            $table->foreign('idUser')
                        ->references('id')
                        ->on('user');    
            $table->foreign('idReview')
                        ->references('id')
                        ->on('review');
        });
    }
}
