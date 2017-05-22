@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-1"><br><br><br><br><img src="{{ Storage::url($tazas->taza) }}" /></div>
			<div class="col-md-3">
				<ul class="list-group"><h3>Datos de la Taza</h3>
						<li class="list-group-item"><h4>Número: #{{ $tazas->id }}</h4></li>
						<li class="list-group-item"><h4>Nombre: {{ $tazas->nombre }}</h4></li>
				</ul>
			</div>
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