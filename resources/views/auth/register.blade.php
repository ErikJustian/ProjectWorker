@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div class="py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <form method="POST" action="{{ route('register') }}" style="padding: 10px;">
                    @csrf
                    <h2 class="text-center text-primary"><b>Be an Employer</b></h2>
                    <blockquote class="blockquote text-center">
                        <p class="mb-0">Seize your moment. See your employer.</p>
                        <footer class="blockquote-footer"><cite title="Source Title">Anonymous</cite></footer>
                    </blockquote>
                    <hr>
                    <!-- Username -->
                    <div class="form-group row">
                        <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                        <div class="col-md-6">
                            <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username"
                                value="{{ old('username') }}" required autofocus> @if ($errors->has('username'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <!-- Type -->
                    <div class="form-group row">
                        <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('Type') }}</label>

                        <div class="col-md-6">
                            <select id="type" class="form-control{{ $errors->has('type') ? ' is-invalid' : '' }}" name="type" value="{{ old('type') }}"
                                required>
                                <option>Individual</option>
                                <option>Organization</option>>
                            </select>

                            @if ($errors->has('type'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('type') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <!-- Name -->
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}"
                                required autofocus> @if ($errors->has('name'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <!-- Gender -->
                    <div class="form-group row">
                        <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                        <div class="col-md-6">
                            <select id="gender" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" name="gender" value="{{ old('gender') }}"
                                required>
                                <option value="M">M</option>
                                <option value="F">F</option>
                            </select>

                            @if ($errors->has('gender'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('gender') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <!-- Phone -->
                    <div class="form-group row">
                        <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                        <div class="col-md-6">
                            <input id="phone_number" type="tel" class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" name="phone_number"
                                value="{{ old('phone_number') }}" required autofocus> @if ($errors->has('name'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('phone_number') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <!-- Address -->
                    <div class="form-group row">
                        <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>
                        <div class="col-md-6">
                            <textarea id="address" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}"
                                required autofocus>
                            </textarea>
                            @if ($errors->has('address'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('address') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <!-- Password -->
                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                                value="{{ old('password') }}" required autofocus> @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <!-- Password Confirmation-->
                    <div class="form-group row">
                        <label for="password_confirmation" class="col-md-4 col-form-label text-md-right">{{ __('Password Confirmation') }}</label>

                        <div class="col-md-6">
                            <input id="password_confirmation" type="password" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}"
                                name="password_confirmation" value="{{ old('password_confirmation') }}" required autofocus> @if ($errors->has('password_confirmation'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <!-- Detail -->
                    <div class="form-group row">
                        <label for="detail" class="col-md-4 col-form-label text-md-right">{{ __('Detail') }}</label>
                        <div class="col-md-6">
                            <textarea id="detail" class="form-control{{ $errors->has('detail') ? ' is-invalid' : '' }}" name="detail" value="{{ old('detail') }}"
                                required autofocus>
                            </textarea>
                            @if ($errors->has('detail'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('detail') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
