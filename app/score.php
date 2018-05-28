<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class score extends Model
{
    protected $table = 'score';
    use SoftDeletingTrait;

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
