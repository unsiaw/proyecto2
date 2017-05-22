@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
                <div class="panel-heading"><h3>Login</h3></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label"></label>

                            <div class="input-group col-md-6">
                                    <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                    <input id="email" type="email" class="form-control" placeholder="E-Mail" name="email" value="{{ old('email') }}" required autofocus>
                                </div>
                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label"></label>

                            <div class="input-group col-md-6">
                                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                    <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>
                                </div>
                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox-info">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                    <a class="btn btn-link pull-right" href="{{ route('password.request') }}">
                                    Forgot password?
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-block btn-primary"><span class="glyphicon glyphicon-ok-sign"></span>
                                          &nbsp;Login
                                    </button>
                                <div class="row">
                                <div class="col-md-8 col-md-offset-3"><br>--Or Login With--<br><br>    
                                        <a class="btn btn-lg btn-social-icon btn-facebook" href="redirect/facebook"><span class="fa fa-facebook"></span></a>&nbsp;
                                        <a class="btn btn-lg btn-social-icon btn-twitter" href="redirect/twitter"><span class="fa fa-twitter"></span></a>&nbsp;
                                        <a class="btn btn-lg btn-social-icon btn-github" href="redirect/github"><span class="fa fa-github"></span></a>&nbsp;
                                        <a class="btn btn-lg btn-social-icon btn-google" href="redirect/google"><span class="fa fa-google"></span></a>
                                </div>
                                </div> 
                            </div> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
