@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @if (session()->has('success'))
                <div class="col-md-8 col-md-offset-2">
                    <div class="alert alert-success" role="alert">
                        <strong>Listo!</strong> Se borró el chasis correctamente
                    </div>
                </div>
                {{ session()->forget('success') }}
            @endif
            @if (session()->has('failed'))
                <div class="col-md-8 col-md-offset-2">
                    <div class="alert alert-danger" role="alert">
                        <strong>Error!</strong> No se pudo borrar el chasis. Puede que esté asociado a algún auto.
                    </div>
                </div>
                {{ session()->forget('failed') }}
            @endif
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Lista de chasis</div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Creado</th>
                                <th>Acción</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($chasis as $chasi)
                                @include('chasis.chasi')
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection