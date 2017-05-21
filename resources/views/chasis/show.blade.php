@extends('layouts.app')

@section('content')
        <div class="col-md-2"></div>
        <div class="col-md-3"><h3><br>Datos del Chasis</h3>
        	<ul class="list-group">
  					<li class="list-group-item"><h4>Numero: #{{ $chasis->id }}</h4></li>
  					<li class="list-group-item"><h4>Nombre: {{ $chasis->nombre }}</h4></li>
			</ul>
		</div>
        <div class="col-md-6"><img src="{{ Storage::url($chasis->fondo) }}" /></div>

@endsection