@extends('layouts.app')
@section('title','Insignia | Servicios ')
@section('content')
    <div class="bg-inicio">
        <img src="{{asset('images/fondos/fondo_ser.png')}}" class="fondo-inicio" alt="fondo inicio">
    </div>
    <br><br>
    <div class="container">
        <div class="row servicios-main">
            <div class="col-sm-12 text-center">
                <h2>VENTA, CONSTRUCCIÓN Y BÚSQUEDA DE <br> <l style="color:#BB1E23">PROPIEDADES INDUSTRIALES Y COMERCIALES</l></h2>
            </div>
        </div>
        <br>
        <div class="row servicios-main">
            <div class="col-sm-1">
            </div>
            <div class="col-sm-10">
                <h4>Asesoramiento y confianza son los valores de nuestra bandera.<br><br> Nuestras alianzas con firmas inmobiliarias nacionales brindan seguridad en tu inversión. Nos apasiona encontrar el sentido de cada propiedad. Es por ello que elaboramos planes de comercialización específicos para cada cliente, identificando sus necesidades, plusvalías, rentabilidad riesgos, y oportunidades en el mercado inmobiliario.</h4>
            </div>
            <div class="col-sm-1">
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class ="col-sm-6">
                <img src="{{asset('images/servicios.png')}}" alt="folleto servicios" class="folleto-servicios">
            </div>
            <div class ="col-sm-6 ">
                <div class="row">
                    <div class="col-sm-12 servicios-main">
                        <h2 class="">En la venta de tu propiedad industrial</h2>
                        <br>
                        <h3 style="color:#BA2025 ">Plan de comercialización</h3>
                    </div>
                </div>
                <br><br>
                <div class="row servicios-main">
                    <div class="col-sm-12 text-left">
                        <h3>Benchmarking <br>Publicidad en 8 portales<br> Video aéreo con Drone <br>Publicidad en redes inmobiliarias a nivel nacional <br>Venta menor a 6 meses <br>Elaboración de expediente administrativo del posible comprador<br> Reporte fotográfico de cada visita Seguimiento mensual con el cliente<br> Acompañamiento en trámites notariales</h3>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <hr>
        <br>
        <div class="row servicios-main">
            <div class="col-sm-6">
                <h3>En la búsqueda de tu propiedad industrial</h3>
                <br>
                <h3 style="color: #BA2025">Por la importancia de tu inversión, elaboramos un plan para brindar seguridad en cada propiedad</h3>
                <br>
                <h3>Diagnóstico de necesidades de la propiedad Benchmarking de mercado industrial. Elaboración y revisión de contrato propuesto por la parte vendedora. Seguimiento en notarias. Propiedades avaladas por la red inmobiliaria. Tiempos menores a 6 meses.</h3>
            </div>
            <div class="col-sm-6">
                <h3>En la construcción de tu propiedad industrial</h3>
                <br>
                <h3 style="color: #BA2025">Por la importancia de levantar una obra que te brinde el bienestar y seguridad que buscas, trabajamos duro para cuidar tu patrimonio</h3>
                <br>
                <h3>Por la importancia de levantar una obra que te brinde el bienestar y seguridad que buscas, trabajamos duro para cuidar tu patrimonio</h3>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="row servicios-main">
            <div class="col-sm-12">
                <h1>NOSOTROS TE PODEMOS <br>  Y TE QUEREMOS AYUDAR</h1>
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
