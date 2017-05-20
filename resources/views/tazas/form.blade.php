@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        <strong>Listo!</strong> Se agregó la taza correctamente
                    </div>
                @endif
                <div class="panel panel-default">
                    <div class="panel-heading">Cargar un nueva taza</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('tazas.admin.create') }}" enctype="multipart/form-data">
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
                                <label for="fondo" class="col-md-4 control-label">Taza</label>

                                <div class="col-md-6">
                                    <input id="fondo" type="file" class="form-control" name="fondo" value="{{ old('fondo') }}" required>

                                    @if ($errors->has('fondo'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('fondo') }}</strong>
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
