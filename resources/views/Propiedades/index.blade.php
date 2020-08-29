@extends('layouts.admin_app')
@section('title','Propiedades')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-right">
                <a data-toggle="modal" data-target="#agregar_tipo"><button class="btn btn-outline-primary">Agregar Propiedades</button></a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <table id="example" class="display nowrap" width="100%">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Editar</th>
                        <th>Eliminar</th>

                    </tr>
                    </thead>

                    <tbody>

                    @foreach($propiedades as $propiedad)
                        <tr>
                            <td>{{$propiedad->id}}</td>
                            <td>{{$propiedad->name}}</td>
                            <td>
                                <a href="{{route('propiedades.edit',$propiedad->id)}}"><button class="btn btn-outline-warning">Editar</button></a>
                            </td>
                            <td>
                                <form action="/propiedades/del/{{$propiedad->id}}"
                                      method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="button" class="btn btn-outline-danger"
                                            onclick="confirm('{{ __("¿Estás seguro de que quieres eliminar este tipo de propiedad?") }}') ? this.parentElement.submit() : ''">
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

    <!-- Modal -->
    <div class="modal fade" id="agregar_tipo" tabindex="-1" role="dialog" aria-labelledby="agregar_tipo" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Tipo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('propiedades.store')}}" method="post">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control-plaintext" id="name" name="name">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>





@endsection
