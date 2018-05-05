<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class favorito extends Model
{
    protected $table = 'favorito';

	public static function addFavorito($idPeli, $idUser){
		$favorito = new favorito;

		$repetido = favorito::where([['idPeli',$idPeli], 
			['idUser', $idUser]])->first();

    	if($repetido) return;

    	$favorito->idPeli = $idPeli;
    	$favorito->idUser = $idUser;

    	$favorito->save();
	} //review::addFavorito(1, 1);
}
