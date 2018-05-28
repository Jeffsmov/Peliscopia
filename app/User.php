<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Hash;

class User extends Model
{

    protected $table = "user";
    use SoftDeletes;

    public static function getPerfilImg($id){
        $us = User::where('id', $id)->first(['ftPerfil AS img','perfilExt AS ext']);
        return $us;
    }

    public static function login($email, $pass){
        $login = User::where('email', $email)->first(['id', 'name', 'password']);
        if (Hash::check($pass, $login->password)){
            return $login;
        }
        return null;
    }

    public static function changeInfo($id, $name, $facebook, $twitter, $bio){
        $user = User::find($id);
        $user->name = $name;
        $user->facebook = $facebook;
        $user->twitter = $twitter;
        $user->bio = $bio;
        $user->save();
    }

    public static function changeImg($id, $img, $imgExt){
        $user = User::find($id);
        $user->ftPerfil = $img;
        $user->perfilExt = $imgExt;
        $user->save();
    }

    public static function signInUser($name, $email, $password, $fechaNacimiento, $idPais){
        $us = new User;

        $repetido = User::where([
            ['email',$email], 
            ['name', $name]
        ])->first(['id']);

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
        //User::signInUser('Someone Else', 'weirdShit@gmail.com', 'nop', '1998-3-24', 136);

    public static function BAN($id){
        User::find($id)->delete();
    }

}
