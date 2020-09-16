@extends('layouts.app',[
    'elementName' => 'contact',

])
@section('title','Insignia | Contacto ')
@section('content')
    <br><br>

    <div class="container">
        <div class="row text-center">
            <div class="col-sm-12">
                <h1 style="color: #BB1E23">¿BUSCAS ALGUNA PROPIEDAD?</h1>
            </div>
        </div>
        <br>
        <div class="row text-center">
            <div class="col-sm-12">
                <h4>En INSIGNIA te asesoramos en cada paso de tu inversión patrimonial. En la adquisición de la tierra,
                    asesoría en la construcción y en la búsqueda del cliente ideal. <br><br>Más que una propiedad, te
                    ofrecemos
                    un modelo de negocio.</h4>
            </div>
        </div>
        <br><br>
        <div class="row text-center">
            <div class="col-sm-9">
                <div class="row">
                    <div class="col-sm-12">
                        <img src="{{asset('images/ofpaz.png')}}" alt="img" width="80%">
                        <br><br>
                        <p>LA PAZ, B.C.S. <br>Plaza Downtown (612) 138 3999</p>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-sm-12">
                        <img src="{{asset('images/ofLeon.png')}}" alt="img" width="80%">
                        <br><br>
                        <p>LEÓN, GTO <br>Plaza Forum (477) 927 4841</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="row show-bg" style="border-radius: 4px;background: #BA1E22">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-12">
                                <br>
                                <p style="font-size: 2vw;font-weight: bolder">contáctanos</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 ">
                                <form action="" method="">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="Nombre" placeholder="Nombre"
                                               name="name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="correo" placeholder="Correo"
                                               name="email">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="phone" placeholder="Telefono"
                                               name="phone">
                                    </div>
                                    <div class="form-group text-left">
                                        <textarea name="text" placeholder="Cuerpo del correo" cols="33"></textarea>
                                    </div>
                                    <br>
                                    <a href="" target="_blank">
                                        <button type="button" class="btn-download">Enviar</button>
                                    </a>
                                    <br><br>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="row show-bg" style="border-radius: 4px;background: #BA1E22">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-12">
                                <br>
                                <p style="font-size: 2vw;font-weight: bolder">Agenda tu cita virtual</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 ">
                                <form action="" method="">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="Nombre" placeholder="Nombre"
                                               name="name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="correo" placeholder="Correo"
                                               name="email">
                                    </div>
                                    <div class="form-group text-left">
                                        <input type="date" name="date">
                                    </div>
                                    <br>
                                    <a href="" target="_blank">
                                        <button type="button" class="btn-download">Agendar</button>
                                    </a>
                                    <br><br>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection
