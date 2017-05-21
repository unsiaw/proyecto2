@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        <strong>Listo!</strong> Se agregó el chasis correctamente
                    </div>
                @endif
                <div class="panel panel-default">
                    <div class="panel-heading">Cargar un nuevo chasis</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('chasis.admin.create') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                                <label for="nombre" class="col-md-4 control-label">Nombre</label>

                                <div class="col-md-6">
                                    <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required autofocus>

                                    @if ($errors->has('nombre'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('fondo') ? ' has-error' : '' }}">
                                <label for="fondo" class="col-md-4 control-label">Fondo</label>

                                <div class="col-md-6">
                                    <input id="fondo" type="file" name="fondo" value="{{ old('fondo') }}" required>

                                    @if ($errors->has('fondo'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('fondo') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('chasis') ? ' has-error' : '' }}">
                                <label for="chasis" class="col-md-4 control-label">Chasis</label>

                                <div class="col-md-6">
                                    <input id="chasis" type="file" name="chasis" value="{{ old('chasis') }}" required>

                                    @if ($errors->has('chasis'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('chasis') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('rueda1x') ? ' has-error' : '' }}">
                                <label for="rueda1x" class="col-md-4 control-label">Rueda 1 X:</label>

                                <div class="col-md-6">
                                    <input id="rueda1x" type="text" class="form-control" name="rueda1x" value="{{ old('rueda1x') }}" required>

                                    @if ($errors->has('rueda1x'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('rueda1x') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('rueda1y') ? ' has-error' : '' }}">
                                <label for="rueda1y" class="col-md-4 control-label">Rueda 1 Y:</label>

                                <div class="col-md-6">
                                    <input id="rueda1y" type="text" class="form-control" name="rueda1y" value="{{ old('rueda1y') }}" required>

                                    @if ($errors->has('rueda1y'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('rueda1y') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('rueda2x') ? ' has-error' : '' }}">
                                <label for="rueda2x" class="col-md-4 control-label">Rueda 2 X:</label>

                                <div class="col-md-6">
                                    <input id="rueda2x" type="text" class="form-control" name="rueda2x" value="{{ old('rueda2x') }}" required>

                                    @if ($errors->has('rueda2x'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('rueda2x') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('rueda2y') ? ' has-error' : '' }}">
                                <label for="rueda2y" class="col-md-4 control-label">Rueda 2 Y:</label>

                                <div class="col-md-6">
                                    <input id="rueda2y" type="text" class="form-control" name="rueda2y" value="{{ old('rueda2y') }}" required>

                                    @if ($errors->has('rueda2y'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('rueda2y') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('ruedasize') ? ' has-error' : '' }}">
                                <label for="ruedasize" class="col-md-4 control-label">Tamaño rueda:</label>

                                <div class="col-md-6">
                                    <input id="ruedasize" type="text" class="form-control" name="ruedasize" value="{{ old('ruedasize') }}" required>

                                    @if ($errors->has('ruedasize'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('ruedasize') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Crear
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
