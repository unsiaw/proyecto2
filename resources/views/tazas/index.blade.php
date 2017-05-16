@extends('layouts.app')

@section('content')
    <form class="form-horizontal" action="{{ route('upload.taza') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="control-label col-sm-4" for="nombre">Nombre:</label>
            <div class="col-xs-6 col-sm-4">
                <input type="nombre" class="form-control" id="nombre" name="nombre">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="fondo">Imagen:</label>
            <div class="col-xs-6 col-sm-4">
                <input type="file" class="form-control" id="fondo" name="fondo">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-4 col-xs-6 col-sm-4">
                <button type="submit" class="btn btn-default">Crear taza</button>
            </div>
        </div>
    </form>
@endsection