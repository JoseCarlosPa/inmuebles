@extends('layouts.admin_app')
@section('title','Editar Ubicaciones')
@section('content')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="{{route('ubicaciones.update',$ubicacion->id)}}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" value="{{$ubicacion->name}}">
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-outline-primary">Salvar</button>
                </form>

            </div>
        </div>

    </div>



@endsection
