@extends('layouts.app')
@section('title','Insignia | Quienes somos ')
@section('content')
    <div class="bg-inicio">
        <img src="{{asset('images/fondos/fondo_quienes.png')}}" class="fondo-inicio" alt="fondo inicio">
    </div>

    <div class ="container">
        <div class ="row">
            <div class ="col-sm-12 text-center">
                <br>
                <img src="{{asset('images/look.png')}}" class="look-img" alt="buscar cliente">
            </div>
        </div>
        <br>
        <div class="quienes-main">
            <div class="row ">
                <div class ="col-sm-12">
                    <h2><strong>¿QUÉ HACEMOS?</strong></h2>
                </div>
            </div>
            <br>
            <div class="row quienes-main">
                <div class ="col-sm-3">
                </div>
                <div class ="col-sm-6">
                    <h4>Comercializamos, asesoramos y acompañamos a nuestrocliente en cada paso del proceso inmobiliario, guiándolo asertivamente y siempre cuidando su patrimonio.</h4>
                </div>
                <div class ="col-sm-3">
                </div>
            </div>
        </div>
        <br>
        <div class ="row">
            <div class ="col-sm-12 text-center">
                <img src="{{asset('images/diagram.png')}}" class="diagram" alt="buscar cliente">
            </div>
        </div>
        <br>
        <div class="quienes-main">
            <div class="row ">
                <div class ="col-sm-12">
                    <h2><strong>¿CÓMO LO HACEMOS?</strong></h2>
                </div>
            </div>
            <br>
            <div class="row quienes-main">
                <div class ="col-sm-3">
                </div>
                <div class ="col-sm-6">
                    <h4>Por medio de un plan de comercialización hecho a la medida y necesidad de cada cliente, potencializando dicho plan con alianzas estratégicas.</h4>
                </div>
                <div class ="col-sm-3">
                </div>
            </div>
        </div>
        <hr width="50%">
        <div class="row">
            <div class ="col-sm-12 text-center">
                <h3>PROPIEDADES <l style="color: #BB1E23">INSIGNIA</l> <br>EN MÉXICO</h3>
            </div>
        </div>
        <br>
        <br>
        <div class ="row">
            <div class ="col-sm-12 text-center">
                <a href="/contacto"><button class="button-contacto">CONTÁCTANOS</button></a>
            </div>
        </div>
        <br><br>

    </div>



@endsection
