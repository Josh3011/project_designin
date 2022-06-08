@extends('layouts.apprev')

@section('content')
    <div class="thumbnail container">
        <center>
            <h2>REGISTRATION</h2>
        </center>
        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <label for="name" class="col-sm-offset-1 col-sm-2 control-label">{{ __('Name') }}</label>
                <div class="col-sm-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-offset-1 col-sm-2 control-label">{{ __('Alamat') }}</label>
                <div class="col-sm-6">
                    <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat"
                        value="{{ old('alamat') }}" required autocomplete="alamat" autofocus>

                    @error('alamat')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-offset-1 col-sm-2 control-label">{{ __('No. HP') }}</label>
                <div class="col-sm-6">
                    <input id="notelp" type="text" class="form-control @error('notelp') is-invalid @enderror" name="notelp"
                        value="{{ old('notelp') }}" required autocomplete="notelp" autofocus>

                    @error('notelp')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-offset-1 col-sm-2 control-label">{{ __('E-Mail Address') }}</label>
                <div class="col-sm-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" required autocomplete="email">

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
                        name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-offset-1 col-sm-2 control-label">{{ __('Confirm Password') }}</label>
                <div class="col-sm-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                autocomplete="new-password">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-5 col-sm-2">
                    <button type="submit" class="btn btn-danger btn-block">
                        {{ __('Register') }}
                    </button>
                </div>


            </div>
        </form>
    </div>
    <div class="footer">
        <div class="container">
            <center>
                @if (Route::has('login'))
                <b>Have an Account? <a href="{{ route('login') }}">Sign up now</a></b>
                @endif
            </center>
            </span>
        </div>
      </div>
@endsection
