<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password' //, 'fechaNacimiento', 'genero', 'tipoUsuario', 'idPais', 'ftPerfil', 'bio'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $table = "user";


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

}
