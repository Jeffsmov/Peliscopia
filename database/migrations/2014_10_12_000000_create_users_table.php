<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
			$table->date('fechaNacimiento');
			$table->integer('genero');
			$table->integer('tipoUsuario');
            $table->rememberToken();
            $table->timestamps();
        });
		DB::statement("ALTER TABLE user ADD ftPerfil MEDIUMBLOB null");
		DB::statement("ALTER TABLE user ADD bio MEDIUMTEXT null");
		
        Schema::create('pais',function(Blueprint $table){
            $table->increments('id');
            $table->string('nombre');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
        Schema::dropIfExists('pais');
    }
}
