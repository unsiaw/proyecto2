@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Login</div>
            <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label"></label>

                        <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                            <input id="email" type="email" class="form-control" placeholder="E-Mail" name="email" value="{{ old('email') }}" required autofocus>
                        </div>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label"></label>

                        <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                            <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>
                        </div>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Logear
                            </button>

                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                Olvidó su Password?
                            </a>

                            <p>  <h3>                              
                       <!--          <a href="redirect/facebook">Facebook Login</a>
                                <a href="redirect/twitter">Twitter Login</a>
                                <a href="redirect/github">Github Login</a>
                                <a href="redirect/google">Google Login</a> -->


    <div class="col-sm-6 social-buttons">
      <a class="btn btn-block btn-social btn-facebook" href="redirect/facebook">
        <span class="fa fa-facebook"></span> Sign in with Facebook
      </a>
      <a class="btn btn-block btn-social btn-twitter" href="redirect/twitter">
        <span class="fa fa-twitter"></span> Sign in with Twitter
      </a>
      <a class="btn btn-block btn-social btn-github" href="redirect/github">
        <span class="fa fa-github"></span> Sign in with GitHub
      </a>
      <a class="btn btn-block btn-social btn-google" href="redirect/google">
        <span class="fa fa-google"></span> Sign in with Google
      </a>
    </div>

                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
