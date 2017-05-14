@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (Auth::check())
                        Welcome {{ Auth::user()->name }} - {{ Auth::user()->isAdmin() }}
                        @if (Auth::user()->isAdmin())
                            Sos administrador.
                        @else
                            Sos usuario normal.
                        @endif 
                    @else
                        Welcome! Please, <a href="{{ url('/login') }}">Login</a> or <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

