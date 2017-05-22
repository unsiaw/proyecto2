@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-3"><h3><br>Datos del Chasis</h3>
        	<ul class="list-group">
  					<li class="list-group-item"><h4>Número: #{{ $chasis->id }}</h4></li>
  					<li class="list-group-item"><h4>Nombre: {{ $chasis->nombre }}</h4></li>
			</ul>
		</div>
        <div class="col-md-6"><img src="{{ Storage::url($chasis->fondo) }}" /></div>
		</div>
		<div class="row">
			<div class="col-md-offset-5 col-md-2">
				<div class="col-md-12">
					<a href="{{ URL::previous() }}">
						<button class="btn btn-primary">Volver</button>
					</a>
				</div>
			</div>
		</div>
	</div>
@endsection