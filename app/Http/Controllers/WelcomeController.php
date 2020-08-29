<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Propiedad;
use App\Ubicacion;

class WelcomeController extends Controller
{
    public function welcome(){

        $propiedades = Propiedad::get();
        $ubicaciones = Ubicacion::get();
        return view('welcome',['propiedades'=>$propiedades,'ubicaciones'=>$ubicaciones]);
    }
}
