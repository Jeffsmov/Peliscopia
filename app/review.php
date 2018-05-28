<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class review extends Model
{
	protected $table = 'review';
    use SoftDeletes;

	public static function addReview($idUser, $idPeli, $score, $content){
		$review = new review;

		$repetido = review::where([['idUser',$idUser], 
			['idPeli', $idPeli]])->first();

    	if($repetido) return;

    	$review->idUser = $idUser;
    	$review->idPeli = $idPeli;

        $review->score = $score;
    	$review->content = $content;

    	$review->save();
	} //review::addReview(1, 1, 10, 'Shit my fuck up');


}
