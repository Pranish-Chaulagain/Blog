@extends('layouts.authLayout')

@section('content')
<div class="d-flex align-items-center justify-content-center h-100">
    <div class="col-lg-4">
        <a class="navbar-brand text-center" href="/">
            <h2>BLOG.</h2>
        </a>
        <p class="text-center">{{ __('Please confirm your password before continuing.') }}</p>
        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

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

            <div class="mb-3">
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>

            <div class="mb-5">
                <button type="submit" class="btn btn-dark d-flex w-100 align-items-center justify-content-center">
                    {{ __('Confirm password') }}
                </button>
            </div>

            <p class="text-center text-muted" style="font-size: 14px;">Copyright &copy; 2023 BLOG, Inc</p>
        </form>
    </div>
</div>
@endsection
