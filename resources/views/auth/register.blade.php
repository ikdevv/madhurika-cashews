@extends('landing')

@section('frontEndContent')
    <link rel="stylesheet" href="{{ asset('Frontend/Styles/Register/register.css') }}">

    <div class="register-header">
        <div class="register-form-title">Create Your Madhurika Cashews Account</div>
        <div class="new-member">Already Have An Account? <a href="{{ route('login') }}">Log in Here</a></div>
    </div>

    <div class="container">
        <div class="register-form">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="input-text">
                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="input-text">
                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="input-text">
                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="input-text">
                    <label for="password-confirm"
                        class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="pwd-password" name="password_confirmation"
                            required autocomplete="new-password">
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="button-register">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>

                <div class="or">
                    <span>OR</span>
                </div>


                <div class="login-with-google">
                    <a class="" href="{{ route('google-auth') }}">
                        <i class="fa-brands fa-google" style="padding-right: 20px"></i>Login With Google
                    </a>
                </div>
            </form>
        </div>
    @endsection
