@extends('layouts.authLayout')

@section('content')

<div class="d-flex align-items-center justify-content-center h-100">
    <div class="col-lg-4">
        <a class="navbar-brand text-center" href="/">
            <h2>BLOG.</h2>
        </a>
        <p class="text-center">Login to access your account</p>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="ms-2 mb-1">{{ __('Email Address') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="ms-2 mb-1">{{ __('Password') }}</label>
                <div class="password-group">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    <span class="toggle-password" id="togglePassword">
                        <i class="bi bi-eye-slash"></i>
                    </span>
                </div>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3 d-flex justify-content-between align-items-center">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-dark d-flex w-100 justify-content-center align-items-center">
                    {{ __('Login') }}
                </button>
            </div>

            <div class="mb-5 d-flex align-items-center justify-content-center gap-1">
                <span>Don't have an account?</span><a href="{{ route('register') }}">Create one</a>
            </div>

            <p class="text-center text-muted" style="font-size: 14px;">Copyright &copy; 2023 BLOG, Inc</p>
        </form>
        </div>
    </div>
</div>
@endsection
