<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{

    use Notifiable;

    protected $table = "user";
    
    protected $fillable = [
        'name', 'email', 'password' //, 'fechaNacimiento', 'genero', 'tipoUsuario', 'idPais', 'ftPerfil', 'bio'
    ];

    protected $hidden = [
        'password', 'remember_token'
    ];

//Usuario no identificado 
/*
	protected function unauthenticated($request, AuthenticationException $exception)
	{
	    return $request->expectsJson()
	                ? response()->json(['message' => $exception->getMessage()], 401)
	                : redirect()->guest(route('login'));
	}
*/

    public static function getPerfilImg($id){
        $us = User::where('id',$id)->first(['ftPerfil AS img','perfilExt AS ext']);
        return $us;
    }

    public static function signInUser($name, $email, $password, $fechaNacimiento, $idPais){
        $us = new User;

        $repetido = User::where([
            ['email',$email], 
            ['name', $name]
        ])->first();

        if($repetido) return;
        
        $us->name = $name;
        $us->email = $email;
        $us->password = Hash::make($password);
        $us->fechaNacimiento = $fechaNacimiento;
        $us->idPais = $idPais;
        $us->genero = 0;
        $us->tipoUsuario = 0;
        $us->ftPerfil = null;
        $us->perfilExt = "";
        $us->bio = "";

        $us->save();
    }   //User::signInUser('Jeffsmov', 'jeff.mov@gmail.com', 'lol', '1998-3-24', 136);

}
