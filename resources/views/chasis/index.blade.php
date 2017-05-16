@extends('layouts.app')

@section('content')
    <form class="form-horizontal" action="{{ route('upload.chasis') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="control-label col-sm-4" for="nombre">Nombre:</label>
            <div class="col-xs-6 col-sm-4">
                <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="fondo">Fondo:</label>
            <div class="col-xs-6 col-sm-4">
                <input type="file" class="form-control" id="fondo" name="fondo">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="fondo">Chasis:</label>
            <div class="col-xs-6 col-sm-4">
                <input type="file" class="form-control" id="chasis" name="chasis">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="rueda1x">Posición X (Rueda delantera):</label>
            <div class="col-xs-6 col-sm-4">
                <input type="text" class="form-control" id="rueda1x" name="rueda1x">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="rueda1y">Posición Y (Rueda delantera):</label>
            <div class="col-xs-6 col-sm-4">
                <input type="text" class="form-control" id="rueda1y" name="rueda1y">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="rueda2x">Posición X (Rueda trasera):</label>
            <div class="col-xs-6 col-sm-4">
                <input type="text" class="form-control" id="rueda2x" name="rueda2x">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="rueda2y">Posición Y (Rueda trasera):</label>
            <div class="col-xs-6 col-sm-4">
                <input type="text" class="form-control" id="rueda2y" name="rueda2y">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="ruedasize">Tamaño de rueda:</label>
            <div class="col-xs-6 col-sm-4">
                <input type="text" class="form-control" id="ruedasize" name="ruedasize">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-4 col-xs-6 col-sm-4">
                <button type="submit" class="btn btn-default">Crear taza</button>
            </div>
        </div>
    </form>
@endsection