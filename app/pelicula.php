<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class pelicula extends Model
{

    protected $table = "pelicula";
    use SoftDeletes;


    public static function addPelicula($nombre, $fechaLanzamiento, $portada = null, $portadaExt = "", $banner = null, $bannerExt = ""){
    	$pelicula = new pelicula;

		$repetido = pelicula::where([['name',$nombre], 
			['fecha', $fechaLanzamiento]])->first();

    	if($repetido) return;

    	$pelicula->name = $nombre;
    	$pelicula->fecha = $fechaLanzamiento;

        $pelicula->ftPortada = $portada;
    	$pelicula->portadaExt = $portadaExt;

        $pelicula->ftBanner = $banner;
    	$pelicula->bannerExt = $bannerExt;

    	$pelicula->save();

 		//pelicula::addPelicula("Scott Pilgrim vs The World", "2010-11-5");
    }

    public static function getPeliculasLike($nombre = ""){
        //auto-completados
    	return pelicula::where('name', 'like', '%'.$nombre.'%')->get(['name','fecha']);
    }

    public static function setPortada($id, $portada, $portadaExt = ".png"){
        $pel = pelicula::where('id',$id)->first();

        $pel->ftPortada = $portada;
        $pel->portadaExt = $portadaExt;

        $pel->save();
    }

    public static function setBanner($id, $banner, $bannerExt = ".png"){
        $pel = pelicula::where('id',$id)->first();

        $pel->ftBanner = $banner;
        $pel->bannerExt = $bannerExt;

        $pel->save();
    }

    public static function getPortada($id){
        $pel = pelicula::where('id',$id)->first(['ftPortada AS img','portadaExt AS ext']);
        return $pel;
    }

    public static function getBanner($id){
        $pel = pelicula::where('id',$id)->first(['ftBanner AS img','bannerExt AS ext']);
        return $pel;
    }


}
