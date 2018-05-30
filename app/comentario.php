<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class comentario extends Model
{
    protected $table = 'comentario';
    use softDeletes;
    
	public static function addComentario($idReview, $idUser, $comment){
		$comentario = new comentario;

    	$comentario->idReview = $idReview;
    	$comentario->idUser = $idUser;
    	$comentario->comment = $comment;

    	$comentario->save();

    	return $comentario;
	} //review::addComentario(1, 1, 'fuck off');

}
