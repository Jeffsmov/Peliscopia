<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class pelicula extends Model
{
    protected $table = "pelicula";
    use SoftDeletes;


    public static function addPelicula($nombre, $fechaLanzamiento, $des, $cat, $portada = null, $portadaExt = "", $banner = null, $bannerExt = ""){
    	$pelicula = new pelicula;

		$repetido = pelicula::where([['name',$nombre], 
			['fecha', $fechaLanzamiento]])->first();

    	if($repetido) return;

        $pelicula->name = $nombre;
    	$pelicula->des = $des;
        $pelicula->cat = $cat;
    	$pelicula->fecha = $fechaLanzamiento;

        $pelicula->ftPortada = $portada;
    	$pelicula->portadaExt = $portadaExt;

        $pelicula->ftBanner = $banner;
    	$pelicula->bannerExt = $bannerExt;

    	$pelicula->save();

        return $pelicula;

 		//pelicula::addPelicula("Scott Pilgrim vs The World", "2010-11-5", "Fuck");
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

    public static function getSearch($value, $what, $from, $to, $page){
        $peliculas = null;
        $peliculas = pelicula::where('name', 'like', '%'.$value.'%');

        if($what!=0){
            $peliculas->where('cat', $what);
        }

        if($from!=""){
            //if(strtotime($date1) < strtotime($date2))
            $max = (strtotime($to) < strtotime($from)) ? $from : $to;
            $min = (strtotime($from) < strtotime($to)) ? $from : $to;
            $peliculas->whereBetween('fecha', array(date($min), date($max)));
            //$peliculas->whereDate('fecha','<=', date($max));
            //$peliculas->whereDate('fecha','>=', date($min));
        }

        return $peliculas->skip(($page-1)*10)->take(10)->get();
    }


}
