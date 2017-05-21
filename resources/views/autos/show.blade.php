@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-8 well">
                <div class="hidden-xs"><h2>Personalizá tu auto</h2></div>
                <div id="miContenedor" class="col-xs-12 full-width well">
                    <canvas id="imagenAuto"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-xs-12 col-sm-6 col-md-8">
            Enlace para compartir: <div class="well well-sm">{{route('autos.share',$auto->uuid)}}</div>
        </div>
    </div>

    {{ $auto->id }}
    {{ $auto->chasis_id }}
    {{ $auto->taza_id }}
    {{ $auto->color }}
@endsection


@section('scripts')
    <script>
        $( document ).ready(function() {
            canvas = new fabric.Canvas('imagenAuto');
            canvas.setWidth(miContenedor.offsetWidth);
            canvas.setHeight(miContenedor.offsetHeight * 1.7);
        });
    </script>
    <script>
        $(function() {
            auto = {};
            $.ajax({
                url: "{{ route('chasis.json.id',$auto->chasis_id) }}",
                context: document.body,
                success: function (data) {
                    auto.chasis = data;
                    $.ajax({
                        url: "{{ route('tazas.json.id',$auto->tazas_id) }}",
                        context: document.body,
                        success: function (data) {
                            auto.tazas = data;
                            auto.color = "{{ $auto->color }}";
                            pintarAuto(auto);
                        },
                        statusCode: {
                            404: function() {
                                alert("Error! No se encontraron resultados");
                            }
                        }
                    });
                },
                statusCode: {
                    404: function() {
                        alert("Error! No se encontraron resultados");
                    }
                }
            });
        });
    </script>
@endsection