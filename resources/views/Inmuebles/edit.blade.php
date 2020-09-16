@extends('layouts.admin_app')
@section('title','Editar Inmueble')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="{{route('inmuebles.update',$inmueble->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control" id="name" placeholder="Nombre"
                               value="{{$inmueble->nombre}}" name="nombre">
                    </div>
                    <div class="form-group">
                        <label for="tipo">Tipo</label>
                        <select name="venta_renta">
                            <option value="Venta" @if(($inmueble->venta_renta)=='Venta') selected @endif>Venta</option>
                            <option value="Renta" @if(($inmueble->venta_renta)=='Renta') selected @endif>Renta</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="propiedad">Tipo de propiedad</label>
                        <select name="propiedad">
                            @foreach($propiedades as $propiedad)
                                <option value="{{$propiedad->id}}"
                                        @if(($inmueble->id_propiedad)== ($propiedad->id)) selected @endif>{{$propiedad->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="ubicacion">Ubicacion</label>
                        <select name="ubicacion">
                            @foreach($ubicaciones as $ubicacion)
                                <option value="{{$ubicacion->id}}"
                                        @if(($inmueble->id_ubicacion) == ($ubicacion->id)) selected @endif>{{$ubicacion->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="Ciudad">Ciudad</label>
                                <input type="text" class="form-control" id="Ciudad" placeholder="Ciudad"
                                       value="{{$inmueble->ciudad}}" name="ciudad">

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="Municipio">Municipio</label>
                                <input type="text" class="form-control" id="Municipio" placeholder="Municipio"
                                       value="{{$inmueble->municipio}}" name="municipio">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="Precio">Precio</label>
                                <input type="text" class="form-control" id="Precio" placeholder="Precio"
                                       value="{{$inmueble->precio}}" name="precio">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="M2T">M2 del Terreno</label>
                                <input type="text" class="form-control" id="M2T" placeholder="M2 del Terreno"
                                       value="{{$inmueble->m2Terreno}}" name="m2t">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="m2c">M2 de Construccion</label>
                                <input type="text" class="form-control" id="m2c" placeholder="M2 de Construccion"
                                       value="{{$inmueble->m2Cons}}" name="m2c">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="agua">Agua</label>
                                <input type="text" class="form-control" id="agua" placeholder="Agua"
                                       value="{{$inmueble->agua}}" name="agua">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="elect">Electricidad</label>
                                <input type="text" class="form-control" id="elect" placeholder="Electricidad"
                                       value="{{$inmueble->elect}}" name="elect">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="google_maps">Ubicacion</label>
                                <input type="text" class="form-control" id="google_maps" placeholder="Ubicacion google maps"
                                       value="{{$inmueble->google_maps}}" name="google_maps">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="link3d">Link Recorrido 3D</label>
                                <input type="text" class="form-control" id="link3d" placeholder="Link de recorrido 3D"
                                       value="{{$inmueble->link3d}}" name="link3d">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="des">Descripción</label>
                        <textarea name="extracto" rows="20">{{$inmueble->extracto}}</textarea>
                        <script>
                            tinymce.init({
                                selector: 'textarea',
                                plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                                toolbar_mode: 'floating',
                            });
                        </script>

                    </div>
                    @if(($inmueble->img)!=null)
                        <h4>Imagen de portada/Thumbnail actual:</h4>
                        <img src="{{asset('uploads/'.$inmueble->img)}}" alt="img" width="300vw">
                    @endif

                    <div class="form-group" style="margin-top: 5%">
                        <label for="img">Imagen Portada/Thumbnail</label>
                        <input type="file" name="img">
                    </div>

                    @if(($inmueble->pdf)!=null)
                        <h4>PDF actual:</h4>
                        <a href="{{asset('uploads/'.$inmueble->pdf)}}" target="_blank">PDF Actual </a>
                    @endif


                    @if(($inmueble->portada)!=null)
                        <h4>Imagen de Banner (vista detallada) actual</h4>
                        <img src="{{asset('uploads/'.$inmueble->portada)}}" alt="img" width="300vw">
                    @endif

                    <div class="form-group" style="margin-top: 5%">
                        <label for="portada">Imagen Banner (vista detallada)</label>
                        <input type="file" name="portada">
                    </div>

                    <div class="form-group" style="margin-top: 5%">
                        <label for="pdf">PDF</label>
                        <input type="file" name="pdf">
                    </div>

                    <input type="hidden" name="img_aux" value="{{$inmueble->img}}">
                    <input type="hidden" name="pdf_aux" value="{{$inmueble->pdf}}">
                    <input type="hidden" name="portada_aux" value="{{$inmueble->portada}}">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
                <br><br>

                <button class="btn btn-outline-info" data-toggle="modal" data-target="#exampleModal"> + Agregar fotos
                </button>

                <br><br>
                <table id="example" class="display nowrap text-center" width="100%">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Imagen</th>
                        <th>Eliminar</th>

                    </tr>
                    </thead>

                    <tbody>
                    @foreach($albumes as $album)
                        <tr>
                            <td>{{$album->id}}</td>
                            <td><img src="{{asset('uploads/'.$album->img)}}" alt="IMG" width="50%"></td>
                            <td>
                                <form action="/delImages/{{$album->id}}"
                                      method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="button" class="btn btn-outline-danger"
                                            onclick="confirm('{{ __("¿Estás seguro de que quieres eliminar esta imagen?") }}') ? this.parentElement.submit() : ''">
                                        {{ __('Eliminar') }}
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar imagen</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/addImages" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <input type="file" name="img">
                        <input type="hidden" name="id_inmuebe" value="{{$inmueble->id}}">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
