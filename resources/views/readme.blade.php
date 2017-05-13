@extends('layout.app')

@section('content')

<!-- Página -->
    <div class="container">
        <div class="row">
            <div class="col-xs-10 col-sm-6 col-md-10 col-md-offset-1 col-xs-offset-1 well">
                <div class="col-md-12">
                    <h1>Créditos</h1>
                    <div class="alert alert-info" role="alert">Página en construcción</div>
                    <h3>Librerías utilizadas</h3>
                    <ul>
                        <li><strong><a href="http://fabricjs.com">FabricJS</a></strong> para colorear canvas.</li>
                    </ul>
                    <h3>Temas utilizados</h3>
                    <ul>
                        <li><strong><a href="https://getbootstrap.com/">Bootstrap</a></strong> nativo.</li>
                        <li><strong><a href="https://bootswatch.com/flatly/">Flatly</a></strong> de Bootswatch.</li>
                        <li><strong><a href="https://bootswatch.com/simplex/">Simplex</a></strong> de Bootswatch.</li>
                    </ul>
                    <h3>Integrantes de la comisión</h3>
                    <ul>
                        <li>Matías Marzullo (80902)</li>
                        <li>Ricardo Ferro Moreno (85611)</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection('content')


@section('scripts')

<script src="js/funciones.js"></script>

@endsection('scripts')