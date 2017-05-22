<nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app_name', 'UNS IAW') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                            <li><a href="{{ route('global.inicio') }}">Inicio</a></li>
                            <li><a href="{{ route('global.readme') }}">Créditos</a></li>
                             <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        Autos <span class="caret"></span>
                                    </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ route('autos.user.create') }}">Crear auto</a></li>
                                    @if (!Auth::guest())
                                         <li><a href="{{ route('autos.user.all') }}">Ver mis autos</a></li>
                                    @endif
                                </ul>
                            </li>
                            @if (!Auth::guest())
                                @if (Auth::user()->isAdmin())
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                            Administrar <span class="caret"></span>
                                        </a>

                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="{{ route('autos.admin.all') }}">Ver autos</a></li>
                                            <li><a href="{{ route('chasis.admin.create') }}">Crear chasis</a></li>
                                            <li><a href="{{ route('chasis.admin.all') }}">Administrar chasis</a></li>
                                            <li><a href="{{ route('tazas.admin.create') }}">Crear taza</a></li>
                                            <li><a href="{{ route('tazas.admin.all') }}">Administrar tazas</a></li>
                                        </ul>
                                     </li>
                                @endif
                            @endif
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>