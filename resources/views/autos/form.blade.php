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
        <div class="col-xs-10 col-sm-6 col-md-4">
            <div class="col-md-12 text-center">
                <div class="hidden-xs"><h3>Opciones</h3></div>
                <div class="row">
                    <ul class="nav nav-pills nav-stacked">
                        <li role="presentation">

                            <div class="btn-group text-center alert alert-info" role="alert" aria-label="chasis" id="ocultar1">
                                <div class="col-xs-3 col-sm-3">
                                    <button type="button" class="btn btn-lg btn-primary" onclick="prevChasis()" aria-label="Anterior chasis">
                                        <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
                                    </button>
                                </div>
                                <div class="col-xs-6 col-sm-6">
                                    <h4 class="mibtn">Chasis</h4>
                                </div>
                                <div class="col-xs-3 col-sm-3">
                                    <button type="button" class="btn btn-lg btn-primary" onclick="nextChasis()" aria-label="Siguiente chasis">
                                        <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
                                    </button>
                                </div>
                            </div>
                        </li>
                        <li role="presentation">
                            <div class="btn-group text-center alert alert-info" role="alert" aria-label="tazas" id="ocultar">
                                <div class="col-xs-3 col-sm-3">
                                    <button type="button" class="btn btn-lg btn-primary" onclick="prevTaza()" aria-label="Anterior taza">
                                        <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
                                    </button>
                                </div>
                                <div class="col-xs-6 col-sm-6">
                                    <h4 class="mibtn">Tazas</h4>
                                </div>
                                <div class="col-xs-3 col-sm-3">
                                    <button type="button" class="btn btn-lg btn-primary" onclick="nextTaza()" aria-label="Siguiente taza">
                                        <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
                                    </button>
                                </div>
                            </div>
                            <li role="presentation">
                                <div class="btn-group text-center alert alert-info" role="alert" aria-label="color"  id="ocultar2">
                                    <h4>Color</h4><p><input class="btn btn-info btn-sm jscolor" id="blend-color" value="FFFFFF" onchange="cambiarColor(this.value)"/></p>
                                </div>
                            </li>
                            <li role="presentation">
                                @if (!Auth::guest())
                                <form class="form-horizontal" role="form" id="formulario" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="btn-group text-center col-xs-6 col-sm-6" role="group" aria-label="Guardar auto">
                                        <button type="submit" class="btn btn-info btn-lg btn-block" aria-label="Guardar auto!" >
                                            <span class="glyphicon glyphicon glyphicon-save" aria-hidden="true"></span> Guardar
                                        </button>
                                    </div>
                                </form>
                                @endif
                                <div class="btn-group text-center col-xs-6 col-sm-6" id="hidear" role="group" aria-label="Cargar random">
                                    <button type="button" class="btn btn-warning btn-lg btn-block" aria-label="Random!" onclick="cargarRandom()">
                                        Random <span class="glyphicon glyphicon-random" aria-hidden="true"></span>
                                    </button>
                                </div>
                            </li>
                        </ul><br>
                        <div class="btn-group text-center col-xs-6 col-sm-12" role="group" aria-label="Cargar imagen">
                            <button type="button" class="btn btn-success btn-lg btn-block" aria-label="Guardar!" onclick="guardarImagen()"><span class="glyphicon glyphicon glyphicon-export" aria-hidden="true"></span> Descargar</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="btn-group text-center col-xs-6 col-sm-12" id="ajaxResponse">
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

    @section('scripts')
    <script>
        $( document ).ready(function() {
            canvas = new fabric.Canvas('imagenAuto');
            canvas.setWidth(miContenedor.offsetWidth);
            canvas.setHeight(miContenedor.offsetHeight * 1.7);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });
    </script>
    <script>
        $(function() {
            $.ajax({
                url: "{{ route('chasis.json') }}",
                context: document.body,
                success: function (data) {
                    jsonChasis = data;
                    console.log(jsonChasis);
                    $.ajax({
                        url: "{{ route('tazas.json') }}",
                        context: document.body,
                        success: function (data) {
                            jsonTazas = data;
                            console.log(jsonChasis);
                            iniciarAuto();
}
});
                }
            });
        });
    </script>
    <script>
        $('#formulario').submit(function (e) {
            e.preventDefault();
            var chasis_id = auto.chasis.id;
            var tazas_id = auto.tazas.id;
            var color = "#"+$('#blend-color').val();
            console.log(chasis_id);
            console.log(tazas_id);
            console.log(color);
            $.ajax({
                type: "POST",
                url: "{{ route('autos.user.create') }}",
                data: {chasis_id: chasis_id, color: color, tazas_id: tazas_id},
                success: function( msg ) {
                    $("#formulario").hide();
                    $("#ocultar").hide();
                    $("#hidear").hide();
                    $("#ocultar1").hide();
                    $("#ocultar2").hide();
                    $("#ajaxResponse").append("<br><div class=\"panel alert alert-success\" role=\"alert\"><button class=\"close\" data-dismiss=\"alert\"></button>"+msg.msg+"</div>");
                    $("#ajaxResponse").append("<div class=\"\"><h4>Link público para compartir: </h4><div class=\"input-group\"><input type=\"text\" id=\"ruta\" class=\"form-control\" value=\""+msg.token+"\" readonly><span class=\"input-group-addon btn btn-primary alert-info\" id=\"visible-button\" title=\"Copiar Link\"><i class=\"glyphicon glyphicon-copy\"  onclick=\"copyToClipboard('#ruta')\" aria-hidden=\"true\"></i></span></div><br><a class=\"btn btn-primary btn-lg btn-block\" href=\""+msg.volver+"\">Crear otro auto </a></div>");
                    var script = document.createElement('script');
                    script.type = "text/javascript";
                    script.text = "document.querySelector(\"#visible-button\").onclick = function() {";
                    script.text += "document.querySelector(\"#ruta\").select();";
                    script.text += "document.execCommand('copy');};";
                    $("#ajaxResponse").append(script);
                }
            });
        });
    </script>

@endsection