<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trailer extends Model
{
    protected $table = 'trailer';
    use softDeletes;

	public static function addTrailer($idPeli, $link){
		$trailer = new trailer;
        
    	$trailer->idPeli = $idPeli;
    	$trailer->link = $link;

    	$trailer->save();
	} //trailer::addTrailer(1, "youtube lol");

}
