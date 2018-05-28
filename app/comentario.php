<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
	} //review::addComentario(1, 1, 'fuck off');

}
