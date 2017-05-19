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
    {{ $auto->id }}
    {{ $auto->chasis_id }}
    {{ $auto->taza_id }}
    {{ $auto->color }}
@endsection