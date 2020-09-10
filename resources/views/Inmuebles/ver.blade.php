@extends('layouts.app')
@section('title','Insignia |'.$datos->nombre)
@section('content')
    <div class="show-bg">
        <div class="mycontainer">
            <div class="row ">
                <div class="col-sm-8">
                    <div class="row">
                        <div class="col-sm-12">
                            <br>
                            <h1 style="color: white;font-weight: bolder;">{{$datos->nombre}}</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 style="color: white">{{$datos->ciudad}},{{$datos->municipio}}
                                ,@foreach($ubicaciones as $ubicacion)
                                    @if(($datos->id_ubicacion) == $ubicacion->id)
                                        {{$ubicacion->name}}
                                    @endif
                                @endforeach</h3>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-4">
                            <h3 style="color: white">
                                @foreach($tipos as $tipo)
                                    @if(($datos->id_propiedad)== $tipo->id)
                                        {{$tipo->name}}
                                    @endif
                                @endforeach
                            </h3>
                        </div>
                        <div class="col-sm-2"></div>
                        <div class="col-sm-3">
                            <h3 style="color: white">{{$datos->m2Terreno}}</h3>
                        </div>
                        <div class="col-sm-3">
                            <h3 style="color: white">{{$datos->m2Cons}}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 text-right">
                    <br><br><br>
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 style="color: white">Precio:</h3>
                            <h3 style="color: white">{{$datos->precio}}</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 style="color: white">{{$datos->venta_renta}}</h3>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-left">
                <a href="{{$datos->google_maps}}" target="_blank">
                <button style="border-radius: 5px;background: #2C2925;color: white">Mapa</button>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-9">
                <div class="row">
                    <div class="col-sm-12">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div style="display: none">{{$contador = 0}}</div>
                                @foreach($albumes as $album)
                                    @if($contador == 0)
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="{{asset(asset('uploads/'.$album->img))}}" alt="First slide">
                                        </div>
                                        <div style="display: none">{{$contador = $contador + 1}}</div>
                                    @endif
                                    <div class="carousel-item ">
                                        <img class="d-block w-100" src="{{asset(asset('uploads/'.$album->img))}}" alt="First slide">
                                    </div>
                                @endforeach

                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">
                            @foreach($albumes as $album)
                                <div class="col-sm-3">
                                    <img data-enlargable style="cursor: zoom-in" width="100%" src="{{asset(asset('uploads/'.$album->img))}}" alt="First slide">
                                </div>
                            @endforeach

                                <script>
                                    $('img[data-enlargable]').addClass('img-enlargable').click(function () {
                                        var src = $(this).attr('src');
                                        var modal;

                                        function removeModal() {
                                            modal.remove();
                                            $('body').off('keyup.modal-close');
                                        }

                                        modal = $('<div>').css({
                                            background: 'RGBA(0,0,0) url(' + src + ') no-repeat center',
                                            backgroundSize: 'contain',
                                            width: '100%', height: '100%',
                                            position: 'fixed',
                                            zIndex: '10000',
                                            top: '0', left: '0',
                                            cursor: 'zoom-out'
                                        }).click(function () {
                                            removeModal();
                                        }).appendTo('body');
                                        //handling ESC
                                        $('body').on('keyup.modal-close', function (e) {
                                            if (e.key === 'Escape') {
                                                removeModal();
                                            }
                                        });
                                    });
                                </script>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <p>{!! $datos->extracto !!}</p>
                    </div>
                </div>


            </div>
            <div class="col-sm-3 show-bg text-center" style="height: 35vw">
                <div class="row">
                    <div class="col-sm-12">
                        <br>
                        <p style="font-size: 2vw;font-weight: bolder">Descarga el PDF de esta propiedad</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
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
                            <br>
                            <a href="{{asset(asset('uploads/'.$datos->pdf))}}" target="_blank">
                                <button type="button" class="btn-download">Descargar</button>
                            </a>
                            <br><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
