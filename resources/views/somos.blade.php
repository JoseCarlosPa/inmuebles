@extends('layouts.app')
@section('title','Insignia | Quienes somos ')
@section('content')
    <br><br>
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-12">
                        <h2>QUIENES SOMOS</h2>
                    </div>
                    <div class="col-sm-12">
                        <img src="{{asset('images/scott.png')}}" alt="IMG" width="100%">
                    </div>
                    <div class="col-sm-12">
                        <p class="text-center">
                            <br>Somos una empresa inmobiliaria enfocada en propiedades industriales /
                            comerciales</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-12">
                        <h2>QUÉ HACEMOS</h2>
                    </div>
                    <div class="col-sm-12">
                        <img src="{{asset('images/marten.png')}}" alt="images" width="100%">
                    </div>
                    <div class="col-sm-12">
                        <p class="text-center"><br>Comercializamos, asesoramos y acompañamos a nuestro cliente en cada
                            paso
                            del proceso inmobiliario, guiándolo asertivamente y siempre cuidando su patrimonio</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-12">
                        <h2>CÓMO LO HACEMOS</h2>
                    </div>
                    <div class="col-sm-12">

                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="{{asset('images/avel.png')}}" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{asset('images/avel.png')}}" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{asset('images/avel.png')}}" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>

                    </div>
                    <div class="col-sm-12">
                        <p class="text-center"><br>Por medio de un plan de comercialización hecho a la medida y
                            necesidad de
                            cada cliente, potencializando dicho plan con alianzas estratégicas</p>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="row text-center">
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-12">
                                <h2>MISIÓN</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <img src="{{asset('images/mision.png')}}" alt="IMG" width="100%">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 myalign-middle">
                        <p>Servir y proteger a las familias mexicanas buscando siempre un mejor planeta y patrimonio
                            para todos.</p>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-12">
                                <h2>VISIÓN</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <img src="{{asset('images/Vision.png')}}" alt="IMG" width="100%">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 myalign-middle">
                        <p>Tener presencia en los 32 estados de la república mexicana con proyectos inmobiliarios
                            rentables para familias mexicanas y nuestro planeta tierra.</p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-12">
                                <h2>DRIVERS</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators2">
                                        <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="{{asset('images/driver.png')}}" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="{{asset('images/driver.png')}}" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="{{asset('images/driver.png')}}" alt="Third slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 myalign-middle text-left" style="font-size: 13px">
                        <p><br><br><strong>Alianzas</strong>
                            <br>
                            Somos una firma inmobiliaria nacional con oficinas en diferentes estados, lo que nos
                            permite potencializar nuestro trabajo y alcance a través de una red inmobiliaria y constante
                            capacitación en el sector.
                            <br><br>
                            <strong>Acompañamiento integral</strong>
                            <br>
                            Ofrecemos un servicio de aseoría
                            tramitológica, construcción y comercialización.
                            <br><br>
                            <strong>Disponibilidad </strong>
                            <br>
                            Nos apasionan brindar un
                            servicio a nuestros clientes de excelencia, es por ello que brindamos asesoría con amplia
                            disponibilidad y respuesta inmediata. Seguridad en su inversión Sólo comercializamos los
                            proyectos en cuenten con todos los permisos y bases sustentadas, trabajando siempre en el
                            marco</p>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-sm-12 text-center">
                <img src="{{asset('images/grupo.png')}}" alt="img" width="70%">
            </div>
        </div>

    </div>



@endsection
