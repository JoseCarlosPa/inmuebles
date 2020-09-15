@extends('layouts.app',[
    'elementName' => 'bolsa',

])
@section('title','Insignia | Bolsa de trabajo ')
@section('content')
    <div class="bg-inicio">
        <img src="{{asset('images/fondos/fondo_ini.png')}}" class="fondo-inicio" alt="fondo inicio">
    </div>
    <br><br>
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-12">
                        <h2>OFERTA LABORAL</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <img src="{{asset('images/laborarl.png')}}" alt="img" width="100%">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-12">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a lacus justo. Donec
                            venenatis, sem a commodo lobortis, sem augue cursus erat, eu sodales enim mi sit amet magna.
                            Aenean quis interdum orci. Cras sit amet consequat est.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-12">
                        <h2>CURSOS</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <img src="{{asset('images/cursos.png')}}" alt="img" width="100%">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-12">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a lacus justo. Donec
                            venenatis, sem a commodo lobortis, sem augue cursus erat, eu sodales enim mi sit amet magna.
                            Aenean quis interdum orci. Cras sit amet consequat est.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-12">
                        <h2>CRECIMIENTO PROFESIONAL</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <img src="{{asset('images/crecimiento.png')}}" alt="img" width="100%">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-12">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a lacus justo. Donec
                            venenatis, sem a commodo lobortis, sem augue cursus erat, eu sodales enim mi sit amet magna.
                            Aenean quis interdum orci. Cras sit amet consequat est.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
