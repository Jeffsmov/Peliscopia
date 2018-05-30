<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class favorito extends Model
{
    protected $table = 'favorito';
    use SoftDeletes;

	public static function addFavorito($idPeli, $idUser){
		$favorito = new favorito;

        $repetido = like::onlyTrashed()->where([  ['idPeli',$idPeli], 
                                                  ['idUser', $idUser]])->first();
        if($repetido){
            $repetido->deleted_at=null;
            $repetido->save();
            return true;
        }

        $repetido = like::where([  ['idPeli',$idPeli], 
                                   ['idUser', $idUser]])->first();
        if($repetido){
            $repetido->delete();
            return false;
        }

    	$favorito->idPeli = $idPeli;
    	$favorito->idUser = $idUser;

    	$favorito->save();
	} //favorito::addFavorito(1, 2);
}
