<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class like extends Model
{
    protected $table = 'like';
    use SoftDeletes;
        
	public static function addLike($idReview, $idUser){
		$like = new like;

        $repetido = like::onlyTrashed()->where([  ['idReview',$idReview], 
                                                  ['idUser', $idUser]])->first();
        if($repetido){
            $repetido->deleted_at=null;
            $repetido->save();
            return true;
        }

        $repetido = like::where([  ['idReview',$idReview], 
                                   ['idUser', $idUser]])->first();
        if($repetido){
            $repetido->delete();
            return false;
        }

    	$like->idReview = $idReview;
    	$like->idUser = $idUser;

    	$like->save();

        return true;
	} //like::addLike(1, 1);

    public static function countLikes($id){
        return $count = like::where('idReview', $id)->count();
    }

}
