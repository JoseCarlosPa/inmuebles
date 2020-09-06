@extends('layouts.admin_app')
@section('title','Album de fotos')
@section('content')

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-left">
                <button class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal"> + Agrega Imagen</button>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">

                <table id="example" class="display nowrap" width="100%">
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
                            <td><img src="{{asset('uploads/'.$album->img)}}" alt="IMG" width="100%"></td>
                            <td>Eliminar</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar imagen</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <input type="file" name="img">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
