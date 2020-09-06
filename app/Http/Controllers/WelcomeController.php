<?php

namespace App\Http\Controllers;

use App\Inmueble;
use Illuminate\Http\Request;
use App\Propiedad;
use App\Ubicacion;

class WelcomeController extends Controller
{
    public function welcome(){

        $propiedades = Propiedad::get();
        $ubicaciones = Ubicacion::get();
        $filtro = Inmueble::orderBy('id', 'desc')->take(9)->get();
        return view('welcome',['propiedades'=>$propiedades,'ubicaciones'=>$ubicaciones,'resultados'=>$filtro]);
    }
    public function servicios(){

        $propiedades = Propiedad::get();
        $ubicaciones = Ubicacion::get();
        return view('servicios',['propiedades'=>$propiedades,'ubicaciones'=>$ubicaciones]);
    }
}
