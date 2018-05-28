<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trailer extends Model
{
    protected $table = 'trailer';
    use softDeletes;

	public static function addTrailer($idPeli, $link){
		$trailer = new trailer;

		$repetido = trailer::where([['idPeli',$idPeli], 
			['link', $link]])->first();

    	if($repetido) return;

    	$trailer->idPeli = $idPeli;
    	$trailer->link = $link;

    	$trailer->save();
	} //review::addTrailer(1, "youtube lol");

}
