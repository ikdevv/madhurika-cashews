@extends('landing')

@section('frontEndContent')
    <link rel="stylesheet" href="{{ asset('Frontend/Styles/Login/login.css') }}">
    @livewireStyles

    <div class="login-header">
        <div class="login-form-title">Welcome to Madhurika Cashews! Please Login</div>
        <div class="new-member">New Member? <a href="{{ route('register') }}">Register Here</a></div>
    </div>

    <div class="container">
        <div class="login-form">


            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="input-text">
                    <label for="email">{{ __('Email Address') }}</label>

                    <div>
                        <input id="email" placeholder="example@gmail.com" type="email"
                            class="text-email @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>



                <div class="input-text">
                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                    <div>
                        <input id="password" type="password" class="pwd-password @error('password') is-invalid @enderror"
                            name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="controls">
                    <div>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif

                        <button type="submit"class="button-login">
                            {{ __('Login') }}
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

    </div>
    <script src="{{ asset('Frontend/Scripts/Login/login.js') }}"></script>
@endsection
