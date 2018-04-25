<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BaseMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelicula', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->date('fecha');
            $table->rememberToken();
            $table->timestamps();
        });
        DB::statement("ALTER TABLE pelicula ADD ftPortada MEDIUMBLOB null");
        DB::statement("ALTER TABLE pelicula ADD ftBanner MEDIUMBLOB null");

        
        Schema::create('review', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('score');
            $table->integer('idUser')->unsigned();
            $table->integer('idPeli')->unsigned();
            
            $table->foreign('idUser')
                        ->references('id')
                        ->on('user');
            
            $table->foreign('idPeli')
                        ->references('id')
                        ->on('pelicula');
            
            $table->rememberToken();
            $table->timestamps();
        });
        DB::statement("ALTER TABLE review ADD content MEDIUMTEXT not null");
        
        
        Schema::create('trailer', function (Blueprint $table) {
            $table->increments('id');
            $table->string('link');
            $table->integer('idPeli')->unsigned();
            
            $table->foreign('idPeli')
                        ->references('id')
                        ->on('pelicula');
            
            $table->rememberToken();
            $table->timestamps();
        });
        
        
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
        
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelicula');
        Schema::dropIfExists('review');
        Schema::dropIfExists('trailer');
        Schema::dropIfExists('comentario');     
        Schema::dropIfExists('like');
        Schema::dropIfExists('score');
        Schema::dropIfExists('favorito');
    }
    
}
