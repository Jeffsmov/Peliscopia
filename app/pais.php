<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pais extends Model
{
    protected $table = "pais";

    public static function getPaisesLike($nombre = ""){
        //auto-completados
    	return pais::where('nombre', 'like', '%'.$nombre.'%')->get();
    }

    
}
