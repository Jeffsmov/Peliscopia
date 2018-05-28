<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class score extends Model
{
    protected $table = 'score';
    use SoftDeletes;

	public static function addScore($idPeli, $idUser, $theScore){
		$score = new score;

		$repetido = score::where([['idPeli',$idPeli], 
			['idUser', $idUser]])->first();

    	if($repetido) return;

    	$score->idPeli = $idPeli;
    	$score->idUser = $idUser;
    	$score->score = $theScore;

    	$score->save();
	} //review::addScore(1, 1, 10);

}
