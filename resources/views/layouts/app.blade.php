<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <!-- Metada -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="img/favicon.ico" />

    <title>{{ config('app_name', 'UNS IAW') }}</title>

    @include('layouts.estilos')

    <meta name="description" content="Sitio web de personalización de un vehículo">
    <meta name="author" content="Marzullo y Ferro Moreno">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

    <!-- Importación de los JS -->
    <!-- JSColor -->
    <script src="{{ URL::to('js/jscolor.min.js') }}"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- FabricJS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/1.7.9/fabric.min.js"></script>
</head>
<body>
    <div id="app">
        @include('layouts.header')
        @yield('content')
    </div>

        @include('layouts.footer')
    <!-- Importación de los JS -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ URL::to('js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::to('js/utils.js') }}"></script>
    <script src="{{ URL::to('js/vista.js') }}"></script>
    <script src="{{ URL::to('js/controlador.js') }}"></script>
    <script>
        $( document ).ready(function() {
            cargarTheme();
        });
    </script>
    @yield('scripts')
    <script type="text/javascript">
        var APP_URL = {!! json_encode(url('/')) !!};
    </script>

</body>
</html>
