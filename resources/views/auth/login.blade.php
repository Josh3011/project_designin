@extends('layouts.apprev')

@section('content')
    <div class="thumbnail container">
        <center>
            <h2>SIGN IN</h2>
        </center>
        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="email" class="col-sm-offset-1 col-sm-2 control-label">{{ __('E-Mail Address') }}</label>
                <div class="col-sm-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-offset-1 col-sm-2 control-label">{{ __('Password') }}</label>
                <div class="col-sm-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <center>
                <div class="checkbox">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
                </center>
                <div class="col-sm-offset-5 col-sm-2">
                    <button type="submit" class="btn btn-danger btn-block">
                        {{ __('Login') }}
                    </button>
                </div>


            </div>
        </form>
    </div>
    <div class="footer">
        <div class="container">
            <center>
                @if (Route::has('register'))
                <b>Don't have any account? <a href="{{ route('register') }}">Register now</a></b>
                @endif
            </center>
            </span>
        </div>
      </div>


@endsection
