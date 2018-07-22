@extends('layouts.loginnavbar') 

@section('title', 'Login')

@section('content')

<div class="container-fluid">
    <div class="row" style="min-height:90vh;">
        <div class="col-md-6" style="background-image: url('{{ asset('images/agreement.jpg') }}'); background-size: cover;">
        </div>
        <div class="col-md-6 align-self-center">
            <div class="d-flex justify-content-center" style="margin: 0 6rem;">
                <div style="width:80%;">
                    <img src="{{asset('images/logo2.png')}}" style="width:100%;">
                    <hr>
                    <form method="POST" action="{{ route('login') }}" style="margin:0.5rem 1rem">
                        @csrf
                        <div class="form-group">
                            <label for="email">{{ __('E-Mail Address') }}</label>
                            <input id="username" type="email" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username"
                                value="{{ old('username') }}" required autofocus> @if ($errors->has('username'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="password">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                                required> @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group row">
                            <div class="w-100 mx-3">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old( 'remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="w-100 mx-2">
                                <button type="submit" class="py-2 btn btn-primary w-100">
                                    {{ __('Login') }}
                                </button>

                                <!-- <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a> -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
