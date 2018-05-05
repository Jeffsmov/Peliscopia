<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class like extends Model
{
    protected $table = 'like';
    
	public static function addLike($idPeli, $idUser){
		$like = new like;

		$repetido = like::where([['idPeli',$idPeli], 
			['idUser', $idUser]])->first();

    	if($repetido) return;

    	$like->idPeli = $idPeli;
    	$like->idUser = $idUser;

    	$like->save();
	} //review::addLike(1, 1);

}
