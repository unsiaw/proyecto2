@extends('layouts.app')

@section('content')
        <div class="col-md-3"></div>
        <div class="col-md-1"><br><br><br><br><img src="{{ Storage::url($tazas->taza) }}" /></div>
        <div class="col-md-3">
        	<ul class="list-group"><h3>Datos de la Taza</h3>
  					<li class="list-group-item"><h4>Numero: #{{ $tazas->id }}</h4></li>
  					<li class="list-group-item"><h4>Nombre: {{ $tazas->nombre }}</h4></li>
			</ul>
		</div>
@endsection