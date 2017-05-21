@extends('layouts.app')

@section('content')
    <script>
        $(function() {
            $.ajax({
                url: "{{ route('chasis.json.id',$auto->chasis_id) }}",
                context: document.body,
                success: function (data) {
                    pedido = data;
                    console.log(pedido);
                    //mostrarPizzas(ordenarPizzas(data));
                }
            });
        });
    </script>
        <div class="col-md-4"></div>
        <div class="col-md-3"><h3>Datos del Auto</h3>
            <ul class="list-group">
                    <li class="list-group-item"><h4>ID: #{{ $auto->id }}</h4></li>
                    <li class="list-group-item"><h4>Chasis ID: {{ $auto->chasis_id}}</h4></li>
                    <li class="list-group-item"><h4>Taza ID: {{ $auto->taza_id }}</h4></li>
                    <li class="list-group-item"><h4>Color {{ $auto->color}}</h4></li>
            </ul>
        </div>
@endsection