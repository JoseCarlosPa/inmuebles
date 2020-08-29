<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inmueble extends Model
{
    protected $table = 'inmbuebles';

    public static function filtro($vr, $tipo, $ubicacion)
    {
        if(($vr != 'N/A') && ($tipo == 'N/A') &&  ($ubicacion == 'N/A')){
            //Filtro Renta/venta
            $filtro = Inmueble::where('venta_renta', $vr)->get();
            return $filtro;

        }else if(($vr != 'N/A') && ($tipo != 'N/A') &&  ($ubicacion == 'N/A')){
            //Filtro Renta/venta + Propiedad
            $filtro = Inmueble::where('venta_renta', $vr)->where('id_propiedad', $tipo)->get();
            return $filtro;

        }else if(($vr != 'N/A') && ($tipo == 'N/A') &&  ($ubicacion != 'N/A')) {
            //Filtro Renta/venta + ubicacion
            $filtro = Inmueble::where('venta_renta', $vr)->where('id_ubicacion', $ubicacion)->get();
            return $filtro;

        }else if(($vr == 'N/A') && ($tipo != 'N/A') &&  ($ubicacion == 'N/A') ) {
            //Filtro  Propiedad
            $filtro = Inmueble::where('id_propiedad', $tipo)->get();
            return $filtro;

        }else if(($vr == 'N/A') && ($tipo != 'N/A') &&  ($ubicacion != 'N/A')) {
            //Filtro  Propiedad + Ubicacion
            $filtro = Inmueble::where('id_propiedad', $tipo)->where('id_ubicacion', $ubicacion)->get();
            return $filtro;

        }else if(($vr == 'N/A') && ($tipo == 'N/A') &&  ($ubicacion != 'N/A') ){
            //Filtro  Ubicacion
            $filtro = Inmueble::where('id_ubicacion', $ubicacion)->get();
            return $filtro;

        }else if(($vr != 'N/A') && ($tipo != 'N/A') &&  ($ubicacion != 'N/A')){
            //Filtro Renta/venta + Propiedad + ubicacion
            $filtro = Inmueble::where('venta_renta', $vr)->where('id_propiedad', $tipo)->where('id_ubicacion', $ubicacion)->get();
            return $filtro;
        }else{
            $filtro = Inmueble::where('venta_renta', $vr)->where('id_propiedad', $tipo)->where('id_ubicacion', $ubicacion)->get();
            return $filtro;
        }

    }
}
