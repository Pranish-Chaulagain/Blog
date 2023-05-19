@extends('layouts.authLayout')

@section('content')
<div class="d-flex align-items-center justify-content-center h-100">
    <div class="col-lg-4">
        <a class="navbar-brand text-center" href="/">
            <h2>BLOG.</h2>
        </a>
        <p class="text-center">Create a new account</p>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-3">
                <label for="name" class="ms-2 mb-1">{{ __('Username') }}</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="ms-2 mb-1">{{ __('Email Address') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="row">
                <div class="col-lg-6 col-12 mb-3">
                <label for="password" class="ms-2 mb-1">{{ __('Password') }}</label>
                <div class="password-group">
                    <input id="password" type="password" class="form-control pass-word @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
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

                <div class="col-lg-6 col-12 mb-3">
                <label for="password-confirm" class="ms-2 mb-1">{{ __('Confirm Password') }}</label>
                <div class="password-group">
                    <input id="password-confirm" type="password" class="form-control pass-word" name="password_confirmation" required autocomplete="new-password">
                    <span class="toggle-password" id="togglePassword">
                        <i class="bi bi-eye-slash"></i>
                    </span>
                </div>
                </div>
            </div>

            <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="terms-check" id="terms-check" required>
                    <label class="form-check-label d-flex align-items-center gap-1" for="terms-check">
                        <span>I accept the</span> <a href="">terms & privacy policy.</a>
                    </label>
                </div>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-dark d-flex w-100 align-items-center justify-content-center">
                    {{ __('Register') }}
                </button>
            </div>

            <div class="mb-5 d-flex align-items-center justify-content-center gap-1">
                <span>Already have an account,</span><a href="{{ route('login') }}">Signup</a>
            </div>

            <p class="text-center text-muted" style="font-size: 14px;">Copyright &copy; 2023 BLOG, Inc</p>
        </form>
    </div>
</div>
@endsection
