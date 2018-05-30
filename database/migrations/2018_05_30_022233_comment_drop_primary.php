<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CommentDropPrimary extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('comentario');

        Schema::create('comentario', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idUser')->unsigned();
            $table->integer('idReview')->unsigned();
            $table->timestamps();

            $table->foreign('idUser')
                        ->references('id')
                        ->on('user');    
            $table->foreign('idReview')
                        ->references('id')
                        ->on('review');
        });
        DB::statement("ALTER TABLE comentario ADD comment MEDIUMTEXT null");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comentario');

        Schema::create('comentario', function (Blueprint $table) {
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
        DB::statement("ALTER TABLE comentario ADD comment MEDIUMTEXT null");
    }
}
