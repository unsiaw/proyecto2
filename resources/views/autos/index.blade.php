@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        <strong>Listo!</strong> Se agregó el auto correctamente
                    </div>
                @endif
                <div class="panel panel-default">
                    <div class="panel-heading">Lista de autos propios</div>
                    <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Creado</th>
                            <th>Acción</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($autos as $auto)
                                @include('autos.auto')
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection