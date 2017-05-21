@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-8 col-md-8 well">
                <div class="hidden-xs"><h2>Personalizá tu auto</h2></div>
                <div id="miContenedor" class="col-xs-12 full-width well">
                    <canvas id="imagenAuto"></canvas>
                </div>
            </div>
        
    
    
        <div class="col-xs-12 col-sm-6 col-md-8 col-md-4">
            <h4>Link público para compartir: </h4>
        <div class="alert alert-info well well-sm" id="p1">
            <a href="{{route('autos.share',$auto->token)}}">{{route('autos.share',$auto->token)}}</a>
        </div>
        <div class="col-md-12">
            <button class="btn btn-primary" onclick="copyToClipboard('#p1')">Copiar Link</button>
         </div>       
                <div class="col-md-8"><h3><br>Datos del auto</h3>
            <ul class="list-group">
                    <li class="list-group-item"><h4>ID: {{ $auto->id }}</h4></li>
                    <li class="list-group-item"><h4>Chasis ID: {{ $auto->chasis_id }}</h4></li>
                    <li class="list-group-item"><h4>Taza ID: {{ $auto->tazas_id }}</h4></li>
                    <li class="list-group-item"><h4>Color: {{ $auto->color }}</h4></li>
            </ul>
        </div>


        </div>
    </div>
    </div>


@endsection


@section('scripts')
    <script>
        function copyToClipboard(elemento) {
             var $temp = $("<input>")
                $("body").append($temp);
                $temp.val($(elemento).text()).select();
                document.execCommand("copy");
                $temp.remove();
        }
    </script>
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